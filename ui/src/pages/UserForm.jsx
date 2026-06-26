import { useState, useEffect } from 'react'
import { useNavigate, useParams } from 'react-router-dom'
import { getUser, createUser, updateUser } from '@/services/userService'
import Button from '@/components/ui/Button'
import Input from '@/components/ui/Input'

const groupOptions = [
  { value: 'superadmin', label: 'Super Admin' },
  { value: 'admin', label: 'Admin' },
  { value: 'developer', label: 'Developer' },
  { value: 'user', label: 'User' },
  { value: 'beta', label: 'Beta User' },
]

export default function UserForm() {
  const { id } = useParams()
  const navigate = useNavigate()
  const isEdit = Boolean(id)

  const [form, setForm] = useState({
    email: '',
    username: '',
    password: '',
    groups: ['user'],
  })
  const [submitting, setSubmitting] = useState(false)
  const [errors, setErrors] = useState({})

  useEffect(() => {
    if (isEdit) {
      getUser(id)
        .then(res => {
          const u = res.data
          setForm({
            email: u.email || '',
            username: u.username || '',
            password: '',
            groups: u.groups || ['user'],
          })
        })
        .catch(() => navigate('/users'))
    }
  }, [id, isEdit, navigate])

  function handleChange(e) {
    setForm(prev => ({ ...prev, [e.target.name]: e.target.value }))
    setErrors(prev => ({ ...prev, [e.target.name]: '' }))
  }

  function toggleGroup(group) {
    setForm(prev => ({
      ...prev,
      groups: prev.groups.includes(group)
        ? prev.groups.filter(g => g !== group)
        : [...prev.groups, group],
    }))
  }

  async function handleSubmit(e) {
    e.preventDefault()
    setErrors({})
    setSubmitting(true)
    try {
      const payload = { email: form.email, username: form.username, groups: form.groups }
      if (!isEdit) payload.password = form.password
      if (isEdit) {
        await updateUser(id, payload)
      } else {
        await createUser(payload)
      }
      navigate('/users')
    } catch (err) {
      if (err.response?.status === 422) {
        setErrors(err.response.data.errors || {})
      } else {
        setErrors({ _general: err.response?.data?.message || err.message || 'Save failed' })
      }
    } finally {
      setSubmitting(false)
    }
  }

  return (
    <div className="max-w-lg">
      <h1 className="text-2xl font-bold mb-4">{isEdit ? 'Edit User' : 'New User'}</h1>
      {errors._general && <p className="text-red-600 text-sm mb-4">{errors._general}</p>}
      <form onSubmit={handleSubmit} className="space-y-4">
        <Input label="Email" name="email" type="email" value={form.email} onChange={handleChange} required error={errors.email} />
        <Input label="Username" name="username" value={form.username} onChange={handleChange} required error={errors.username} />
        {!isEdit && (
          <Input label="Password" name="password" type="password" value={form.password} onChange={handleChange} required error={errors.password} />
        )}
        <div>
          <label className="block text-sm font-medium text-gray-700 mb-2">Groups</label>
          <div className="space-y-1">
            {groupOptions.map(g => (
              <label key={g.value} className="flex items-center gap-2 text-sm">
                <input
                  type="checkbox"
                  checked={form.groups.includes(g.value)}
                  onChange={() => toggleGroup(g.value)}
                  className="rounded border-gray-300 text-blue-600 focus:ring-blue-500"
                />
                {g.label}
              </label>
            ))}
          </div>
        </div>
        <div className="flex gap-3 pt-2">
          <Button type="submit" loading={submitting}>{isEdit ? 'Update' : 'Create'}</Button>
          <Button type="button" variant="secondary" onClick={() => navigate('/users')}>Cancel</Button>
        </div>
      </form>
    </div>
  )
}
