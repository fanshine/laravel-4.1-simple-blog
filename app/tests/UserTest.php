<?php
class UserTest extends TestCase {
    public function testUsernameIsRequired ()
    {
        $user = new User;
        $user->email = "phil@ipbrown.com";
        $user->password = "password";
        $user->password_confirmation = "password";

        $this->assertFalse($user->save());

        $error = $user->errors()->all();

        $this->assertCount(1, $errors);

        $this->assertEquals($errors[0], "The username field is reuqired.");
    }
}