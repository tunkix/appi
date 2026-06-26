import { api } from '@/utils/api'

export async function getUsers(params = {}) {
  const { data } = await api.get('/api/users', { params })
  return data
}

export async function getUser(id) {
  const { data } = await api.get(`/api/users/${id}`)
  return data
}

export async function createUser(payload) {
  const { data } = await api.post('/api/users', payload)
  return data
}

export async function updateUser(id, payload) {
  const { data } = await api.put(`/api/users/${id}`, payload)
  return data
}

export async function deleteUser(id) {
  const { data } = await api.delete(`/api/users/${id}`)
  return data
}
