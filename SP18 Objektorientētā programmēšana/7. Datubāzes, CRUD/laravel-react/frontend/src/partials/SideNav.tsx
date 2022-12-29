import React from 'react'
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome"
import { faDashboard, faUsers, faDoorClosed } from "@fortawesome/free-solid-svg-icons"
import { IconDefinition } from "@fortawesome/fontawesome-svg-core"
import { useState, useEffect } from 'react'
import { Link, useLocation } from "react-router-dom"
import { useStateContext } from "../contexts/ContextProvider"

type Props = {}

const SideNav = (props: Props) => {
  const location = useLocation()
  const { user } = useStateContext()

  if (!user)
    return <></>;

  type NavButtonTye = {
    href: string,
    name: string,
    icon: IconDefinition,
    onClick?: (event: React.MouseEvent<HTMLAnchorElement, MouseEvent>) => void
  }

  const logout = (event: React.MouseEvent<HTMLAnchorElement, MouseEvent>) => {
    event.preventDefault()
    console.log('logging out')
  }

  const optionsList: NavButtonTye[] = [
    { name: 'Dashboard', href: '/dashboard', icon: faDashboard },
    { name: 'Users', href: '/users', icon: faUsers },
    { name: 'Logout', href: '/', icon: faDoorClosed, onClick: logout }
  ]



  const NavButton = ({ href, name, icon, onClick }: NavButtonTye) => (
    <Link to={href}
      className={`btn-side-nav ${location.pathname === href ? 'active' : 'passive'}`}
      onClick={onClick ? e => onClick(e) : () => { }}
    >
      <FontAwesomeIcon icon={icon} className='text-gray-200 w-5 h-5' />
      <span className='ml-3'>{name}</span>
    </Link>
  )

  return (
    <aside className='w-64 min-h-screen bg-gray-900' aria-label='Sidebar'>
      <div className='overflow-y-auto py-4 px-3  rounded bg-gray-50 dark:bg-gray-800 border-b border-b-gray-700'>
        <a href='/' className='flex items-center pl-2.5 mb-5'>
          <img src='https://flowbite.com/docs/images/logo.svg' className='mr-3 h-6 sm:h-7' alt='Flowbite Logo' />
          <span className='self-center text-xl font-semibold whitespace-nowrap dark:text-white'>
            {user.name}
          </span>
        </a>
        <ul className='space-y-2'>
          {optionsList.map((props, i) => i !== optionsList.length - 1
            ? <li key={props.name}><NavButton  {...props} /></li>
            : <React.Fragment key={props.name}></React.Fragment>)}
        </ul>
      </div>
      <div className='overflow-y-auto py-4 px-3  rounded bg-gray-50 dark:bg-gray-800'>
        <NavButton {...optionsList[optionsList.length - 1]} />
      </div>
    </aside>
  )
}

export default SideNav