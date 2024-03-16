<?php


class AuthRequest
{
    public function rules()
    {
        return [
            'username' => 'required',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Tên tài khoản không được để trống',
            'password.required' => 'Mật khẩu không được để trống'
        ];
    }
}