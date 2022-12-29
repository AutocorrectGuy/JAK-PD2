import { createContext, useContext, useState } from 'react'
import { userType } from './ContextProviderTypes'

const defaultContext = {
  user: {
    name: ""
  } as userType | null,
  token: null as string | null,
  setUser: null as any,
  updateToken: (token: string | null) => { }
}

const StateContext: React.Context<typeof defaultContext> = createContext(defaultContext)

export const ContextProvider = ({ children }: { children: any }) => {
  const [user, setUser] = useState<any>(null)
  // const [user, setUser] = useState<userType>({ name: 'Janis' })
  // const [token,] = useState(localStorage.getItem('ACCESS_TOKEN'))
  const [token,] = useState(null)

  const updateToken = (token: string | null): void => {
    token
      ? localStorage.getItem('ACCESS_TOKEN')
      : localStorage.removeItem('ACCESS_TOKEN')
  }

  return (
    <StateContext.Provider value={{
      user: user ?? null,
      token,
      setUser,
      updateToken
    }}>
      {children}
    </StateContext.Provider>
  )
}

export const useStateContext = () => useContext(StateContext)