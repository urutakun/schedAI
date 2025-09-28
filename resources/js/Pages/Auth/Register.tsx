import React from 'react'
import FormInputField from '../Components/FormInputField'
import FormInput from '../Components/FormInput'
import FormLabel from '../Components/FormLabel'
import FormSubmitButton from '../Components/FormSubmitButton'
import { useForm, Link } from '@inertiajs/react'

const Register = () => {
const { data, setData, errors, post } = useForm({
  'first_name': '',
  'last_name': '',
  'email': '',
  'password': '',
  'password_confirmation': ''
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
          <h1 className='text-5xl font-bold tracking-tighter'>Create Account</h1>
          <p className='text-accent'>Get started by creating an account</p>
        </div>
        <form action="#">
          <div className="full_name grid grid-cols-2 gap-x-6">
            <FormInputField className='mb-0'>
              <FormLabel htmlFor={'first_name'} textLabel={'First Name'} />
              <FormInput
                id={'first_name'}
                type={'text'}
                placeholder={'John'}
                value={data.first_name}
                onChange={e => setData('first_name', e.target.value)}
                error={errors.first_name}
              >
              </FormInput>
            </FormInputField>
            <FormInputField className='mb-0'>
              <FormLabel htmlFor={'last_name'} textLabel={'Last Name'} />
              <FormInput
                id={'last_name'}
                type={'text'}
                placeholder={'Doe'}
                value={data.last_name}
                onChange={e => setData('last_name', e.target.value)}
                error={errors.last_name}
              >
              </FormInput>
            </FormInputField>
          </div>
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
            <FormLabel htmlFor={'password'} textLabel={'Password'} />
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
            <FormLabel htmlFor={'password_confirmation'} textLabel={'Confirm Password'} />
            <FormInput
              id={'password_confirmation'}
              type={'password'}
              placeholder={'Enter your password'}
              value={data.password_confirmation}
              onChange={e => setData('password_confirmation', e.target.value)}
              error={errors.password_confirmation}
            >
            </FormInput>
          </FormInputField>
          <FormInputField>
            <FormSubmitButton submit={'Register'} onClick={handleLogin} className={'mt-4'}/>
          </FormInputField>
          <div className="mt-4 text-cblue flex space-x-1 text-sm">
              <span>Already have an account? </span>
              <Link href="/auth/login" className='font-bold ctransition hover:underline cursor-pointer'>Login</Link>
          </div>
        </form>
      </div>
      <div className="hidden lg:block col-2 w-full h-full overflow-hidden rounded-bl-[20rem]">
        <img src="/assets/images/shesh.jpg" alt="login_img" className='w-full h-full object-cover' />
      </div>
    </div>
  )
}

export default Register
