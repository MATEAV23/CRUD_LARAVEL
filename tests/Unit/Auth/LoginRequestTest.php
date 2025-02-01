<?php

namespace Tests\Unit\Auth;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Validator;
use Tests\TestCase;

class LoginRequestTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->request = new LoginRequest();
    }

    public function test_login_validation_passes_with_valid_data()
    {
        $validator = Validator::make([
            'email' => 'john@example.com',
            'password' => 'password123'
        ], $this->request->rules());

        $this->assertFalse($validator->fails());
    }

    public function test_email_is_required()
    {
        $validator = Validator::make([
            'password' => 'password123'
        ], $this->request->rules());

        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('email', $validator->errors()->toArray());
    }

    public function test_email_must_be_valid()
    {
        $validator = Validator::make([
            'email' => 'not-an-email',
            'password' => 'password123'
        ], $this->request->rules());

        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('email', $validator->errors()->toArray());
    }

    public function test_password_is_required()
    {
        $validator = Validator::make([
            'email' => 'john@example.com'
        ], $this->request->rules());

        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('password', $validator->errors()->toArray());
    }
}
