import { createBrowserRouter, Navigate, RouterProvider } from "react-router-dom"
import ReactDOM from 'react-dom/client'
import './services/tailwindcss/index.css'
import Login from "./views/Login"
import Signup from "./views/Signup"
import Users from "./views/Users"
import NotFound from "./views/NotFound"
import DefaultLayout from "./components/DefaultLayout"
import GuestLayout from "./components/GuestLayout"
import Dashboard from "./views/Dashboard"
import { ContextProvider } from "./contexts/ContextProvider"


const root = ReactDOM.createRoot(
  document.getElementById('root') as HTMLElement
)

root.render(
  <ContextProvider>
    <RouterProvider router={createBrowserRouter([
      {
        path: '/', element: <DefaultLayout />, children: [
          { path: '/', element: <Navigate to='/users' /> },
          { path: '/users', element: <Users /> },
          { path: '/dashboard', element: <Dashboard /> },
        ]
      },
      {
        path: '/', element: <GuestLayout />, children: [
          { path: '/login', element: <Login /> },
          { path: '/signup', element: <Signup /> },
        ]
      },
      { path: '*', element: <NotFound /> },
    ])} />
  </ContextProvider>
)
