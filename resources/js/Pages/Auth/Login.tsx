import React from 'react'
import FormInputField from '../Components/FormInputField'
import FormInput from '../Components/FormInput'
import FormLabel from '../Components/FormLabel'
import FormSubmitButton from '../Components/FormSubmitButton'
import { useForm, Link } from '@inertiajs/react'

const Login = () => {
const { data, setData, errors, post } = useForm({
  'email': '',
  'password': ''
});

const handleLogin = (): void => {
  return;
}

const handleForgotPassword = (): void => {
  return;
}

return (
    <div className='w-screen h-screen grid grid-cols-2 gap-x-8 font-dm font-regular text-black text-sm md:text-base'>
      <div className="col-span-2 lg:col-span-1 w-full h-full lg:py-[3rem] px-[4rem] lg:px-[16rem] flex flex-col justify-center space-y-16">
        <div className="header space-y-3">
          <h1 className='text-5xl font-bold tracking-tighter'>Sign In</h1>
          <p className='text-accent'>Enter your email and password</p>
        </div>
        <form action="#">
          <FormInputField>
            <FormLabel htmlFor={'email'} textLabel={'Email'} />
            <FormInput
              id={'email'}
              type={'text'}
              placeholder={'johndoe@example.com'}
              value={data.email}
              onChange={e => setData('email', e.target.value)}
              error={errors.email}
            >
            </FormInput>
          </FormInputField>
          <FormInputField>
            <div className="password-label-container flex justify-between">
              <FormLabel htmlFor={'password'} textLabel={'Password'} />
              <Link href='/password/reset' className='ctransition hover:underline cursor-pointer'>Forgot Password?</Link>
            </div>
            <FormInput
              id={'password'}
              type={'password'}
              placeholder={'Enter your password'}
              value={data.password}
              onChange={e => setData('password', e.target.value)}
              error={errors.password}
            >
            </FormInput>
          </FormInputField>
          <FormInputField>
            <FormSubmitButton submit={'Log in'} onClick={handleLogin} className={'mt-4'}/>
          </FormInputField>
          <div className="mt-4 text-cblue flex space-x-1 text-sm">
              <span>Not registered yet? </span>
              <Link href="/auth/register" className='font-bold ctransition hover:underline cursor-pointer'>Create an account</Link>
          </div>
        </form>
      </div>
      <div className="hidden lg:block col-2 w-full h-full overflow-hidden rounded-bl-[20rem]">
        <img src="/assets/images/shesh.jpg" alt="login_img" className='w-full h-full object-cover' />
      </div>
    </div>
  )
}

export default Login
