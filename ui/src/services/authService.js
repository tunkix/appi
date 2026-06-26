import api from '@/utils/api'

export async function login(email, password) {
  const { data } = await api.post('/api/auth/login', { email, password })
  return data
}

export async function refresh(token) {
  const { data } = await api.post('/api/auth/refresh', { token })
  return data
}

export async function logout() {
  await api.post('/api/auth/logout')
}

export async function getMe() {
  const { data } = await api.get('/api/auth/me')
  return data
}
