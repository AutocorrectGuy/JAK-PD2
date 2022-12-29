import { Link } from "react-router-dom"

type Props = {}

const Login = (props: Props) => {

  const onSubmit = (event:React.FormEvent<HTMLFormElement>) => {
    event.preventDefault()
    console.log(process.env.REACT_APP_BASE_URL);
  }

  return (
    <section className="bg-gray-50 dark:bg-gray-900">
      <div className="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div className="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
          <div className="p-6 space-y-4 md:space-y-6 sm:p-8">
            <h1 className="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
              Sign in to your account
            </h1>
            <form className="space-y-4 md:space-y-6" onSubmit={(event) => onSubmit(event)}>
              <div>
                <label htmlFor="email" className="auth-input label">Your email</label>
                <input type="email" name="email" id="email" className="auth-input input-field" placeholder="name@company.com" required />
              </div>
              <div>
                <label htmlFor="password" className="auth-input label">Password</label>
                <input type="password" name="password" id="password" placeholder="••••••••" className="auth-input input-field" required />
              </div>
              <button type="submit" className="auth-input btn-submit login">Sign in</button>
              <p className="text-sm font-light text-gray-500 dark:text-gray-400">
                Don’t have an account yet? &nbsp;
                <Link to="/signup" className="font-medium text-purple-600 hover:underline dark:text-purple-500">Sign up</Link>
              </p>
            </form>
          </div>
        </div>
      </div>
    </section>
  )
}

export default Login