import { createContext, useContext, useState, useEffect, useCallback } from 'react'
import * as authService from '@/services/authService'

const AuthContext = createContext(null)

const initialState = { user: null, token: null, loading: true }

export function AuthProvider({ children }) {
  const [state, setState] = useState(initialState)

  useEffect(() => {
    const token = localStorage.getItem('appi_token')
    if (!token) {
      setState({ user: null, token: null, loading: false })
      return
    }
    authService
      .getMe()
      .then((res) => setState({ user: res.data, token, loading: false }))
      .catch(() => {
        localStorage.removeItem('appi_token')
        setState({ user: null, token: null, loading: false })
      })
  }, [])

  const login = useCallback(async (email, password) => {
    const res = await authService.login(email, password)
    localStorage.setItem('appi_token', res.token)
    const me = await authService.getMe()
    setState({ user: me.data, token: res.token, loading: false })
    return me.data
  }, [])

  const logout = useCallback(async () => {
    try {
      await authService.logout()
    } catch {}
    localStorage.removeItem('appi_token')
    setState({ user: null, token: null, loading: false })
  }, [])

  return (
    <AuthContext.Provider value={{ state, login, logout }}>
      {children}
    </AuthContext.Provider>
  )
}

export function useAuth() {
  const ctx = useContext(AuthContext)
  if (!ctx) throw new Error('useAuth must be used within AuthProvider')
  return ctx
}
