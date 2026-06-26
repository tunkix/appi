import { useState, useEffect, useCallback } from 'react'
import { useNavigate } from 'react-router-dom'
import { getUsers, deleteUser } from '@/services/userService'
import { useDebounce } from '@/hooks/useDebounce'
import Table from '@/components/ui/Table'
import Button from '@/components/ui/Button'
import Badge from '@/components/ui/Badge'
import ConfirmDialog from '@/components/ui/ConfirmDialog'
import { formatDateTime } from '@/utils/formatters'

const groupVariant = {
  superadmin: 'red',
  admin: 'blue',
  developer: 'purple',
  user: 'gray',
  beta: 'yellow',
}

export default function UsersList() {
  const navigate = useNavigate()
  const [users, setUsers] = useState([])
  const [loading, setLoading] = useState(true)
  const [search, setSearch] = useState('')
  const [deleteTarget, setDeleteTarget] = useState(null)
  const [deleting, setDeleting] = useState(false)
  const debouncedSearch = useDebounce(search)

  const fetchUsers = useCallback(async () => {
    setLoading(true)
    try {
      const res = await getUsers({ search: debouncedSearch || undefined })
      setUsers(res.data || [])
    } catch {
      setUsers([])
    } finally {
      setLoading(false)
    }
  }, [debouncedSearch])

  useEffect(() => {
    fetchUsers()
  }, [fetchUsers])

  async function handleDelete() {
    if (!deleteTarget) return
    setDeleting(true)
    try {
      await deleteUser(deleteTarget.id)
      setDeleteTarget(null)
      fetchUsers()
    } catch {
    } finally {
      setDeleting(false)
    }
  }

  const columns = [
    { key: 'email', label: 'Email', render: (_, row) => (
      <button onClick={() => navigate(`/users/${row.id}/edit`)} className="text-blue-600 hover:underline font-medium">
        {row.email}
      </button>
    )},
    { key: 'username', label: 'Username' },
    { key: 'groups', label: 'Groups', render: (groups) => (
      <div className="flex gap-1 flex-wrap">
        {(groups || []).map(g => (
          <Badge key={g} variant={groupVariant[g] || 'gray'}>{g}</Badge>
        ))}
      </div>
    )},
    { key: 'created_at', label: 'Created', render: (val) => formatDateTime(val) },
    { key: 'actions', label: 'Actions', render: (_, row) => (
      <div className="flex gap-2">
        <Button variant="secondary" size="sm" onClick={() => navigate(`/users/${row.id}/edit`)}>Edit</Button>
        <Button variant="danger" size="sm" onClick={() => setDeleteTarget(row)}>Delete</Button>
      </div>
    )},
  ]

  return (
    <div>
      <div className="flex items-center justify-between mb-4">
        <h1 className="text-2xl font-bold">Users</h1>
        <Button onClick={() => navigate('/users/new')}>Add User</Button>
      </div>
      <input
        type="text"
        placeholder="Search users by email or name..."
        value={search}
        onChange={e => setSearch(e.target.value)}
        className="w-full border border-gray-300 rounded px-3 py-2 mb-4 focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm"
      />
      <Table columns={columns} data={users} loading={loading} emptyText="No users found." />
      <ConfirmDialog
        open={!!deleteTarget}
        onClose={() => setDeleteTarget(null)}
        onConfirm={handleDelete}
        title="Delete User"
        message={`Are you sure you want to delete ${deleteTarget?.email}? This action cannot be undone.`}
        confirmLabel="Delete"
        loading={deleting}
      />
    </div>
  )
}
