import { Navigate, Outlet } from 'react-router-dom'
import { useStateContext } from '../contexts/ContextProvider'
import SideNav from '../partials/SideNav'

type Props = {}

const DefaultLayout = (props: Props) => {

  const { user, token } = useStateContext()

  if (!user || !token)
    return <Navigate to='/login' />

  return (
    <div className='flex w-screen'>
      <SideNav />
      <div className='p-5 flex flex-col grow '>
        <div>Default</div>
        <div>{user?.name}</div>
        <Outlet />
      </div>

    </div>
  )
}

export default DefaultLayout