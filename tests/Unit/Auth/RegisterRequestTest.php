<?php

namespace Tests\Unit\Auth;

use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Support\Facades\Validator;
use Tests\TestCase;

class RegisterRequestTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->request = new RegisterRequest();
    }

    public function test_register_validation_passes_with_valid_data()
    {
        $validator = Validator::make([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => 'password123'
        ], $this->request->rules());

        $this->assertFalse($validator->fails());
    }

    public function test_name_is_required()
    {
        $validator = Validator::make([
            'email' => 'john@example.com',
            'password' => 'password123'
        ], $this->request->rules());

        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('name', $validator->errors()->toArray());
    }

    public function test_email_must_be_valid()
    {
        $validator = Validator::make([
            'name' => 'John Doe',
            'email' => 'not-an-email',
            'password' => 'password123'
        ], $this->request->rules());

        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('email', $validator->errors()->toArray());
    }

    public function test_password_minimum_length()
    {
        $validator = Validator::make([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => '12345'
        ], $this->request->rules());

        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('password', $validator->errors()->toArray());
    }
}
