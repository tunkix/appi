import { useState, useEffect, useCallback } from 'react'
import { api } from '@/utils/api'

export function useApi(url, options = {}) {
  const { immediate = true, params = {} } = options
  const [data, setData] = useState(null)
  const [loading, setLoading] = useState(immediate)
  const [error, setError] = useState(null)

  const fetch = useCallback(async (overrideParams) => {
    setLoading(true)
    setError(null)
    try {
      const res = await api.get(url, { params: overrideParams ?? params })
      setData(res.data)
      return res.data
    } catch (err) {
      setError(err.response?.data?.message || err.message || 'Request failed')
      throw err
    } finally {
      setLoading(false)
    }
  }, [url])

  useEffect(() => {
    if (immediate) {
      fetch()
    }
  }, [immediate, fetch])

  return { data, loading, error, refetch: fetch }
}
