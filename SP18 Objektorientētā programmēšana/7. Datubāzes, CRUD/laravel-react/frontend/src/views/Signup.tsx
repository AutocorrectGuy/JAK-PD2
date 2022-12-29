import { useRef, useState } from 'react'
import { Link } from 'react-router-dom'
import { useStateContext } from '../contexts/ContextProvider'
import { userType } from '../contexts/ContextProviderTypes'
import axiosClient from '../services/axios/axios-client'

type Props = {}

const Signup = (props: Props) => {
  const usernameRef = useRef<HTMLInputElement | null>(null)
  const emailRef = useRef<HTMLInputElement | null>(null)
  const passwordRef = useRef<HTMLInputElement | null>(null)
  const passwordConfirmRef = useRef<HTMLInputElement | null>(null)
  
  const { setUser, updateToken } = useStateContext()
  const [errors, setErrors] = useState<any>()

  const onSubmit = (event: React.FormEvent<HTMLFormElement>) => {
    event.preventDefault()
    const payload = {
      name: usernameRef.current?.value,
      email: emailRef.current?.value,
      password: passwordRef.current?.value,
      password_confirm: passwordConfirmRef.current?.value,
    }
    axiosClient.post('/signup', payload)
      .then((response) => {
        console.log('Post successfull')
        // setUser(response.data.user)
        // updateToken(response.data.token)
      }, err => console.log(err))
      .catch(err => {
        console.log(err)
        setErrors(() => err)
        console.log('there was post error')
      })
  }

  return (
    <section className="bg-gray-50 dark:bg-gray-900">
      <div className="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div className="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
          <div className="p-6 space-y-4 md:space-y-6 sm:p-8">
            <h1 className="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
              Create and account
            </h1>
            <form className="space-y-4 md:space-y-6" onSubmit={(event) => onSubmit(event)}>
              {
                errors && <div>
                  {
                    Object.keys(errors).map(key => (
                      <div key={key}>{errors[key][0]}</div>
                    ))
                  }
                </div>
              }
              <div>
                <label htmlFor="username" className="auth-input label">Your username</label>
                <input ref={usernameRef} type="text" name="username" id="username" className="auth-input input-field" placeholder="username" required />
              </div>
              <div>
                <label htmlFor="email" className="auth-input label">Your email</label>
                <input ref={emailRef} type="email" name="email" id="email" className="auth-input input-field" placeholder="name@company.com" required />
              </div>
              <div>
                <label htmlFor="password" className="auth-input label">Password</label>
                <input ref={passwordRef} type="password" name="password" id="password" placeholder="••••••••" className="auth-input input-field" required />
              </div>
              <div>
                <label htmlFor="confirmPassword" className="auth-input label">Confirm password</label>
                <input ref={passwordConfirmRef} type="password" name="confirmPassword" id="confirmPassword" placeholder="••••••••" className="auth-input input-field" required />
              </div>
              <button type="submit" className="auth-input btn-submit signup">Create an account</button>
              <p className="text-sm font-light text-gray-500 dark:text-gray-400">
                Already have an account? &nbsp;
                <Link to='/login' className="font-medium text-rose-600 hover:underline dark:text-rose-500">Login here</Link>
              </p>
            </form>
          </div>
        </div>
      </div>
    </section>
  )
}

export default Signup