import { useState } from 'react'

export function usePagination(initialPage = 1, initialPerPage = 20) {
  const [page, setPage] = useState(initialPage)
  const [perPage, setPerPage] = useState(initialPerPage)
  const [total, setTotal] = useState(0)

  const totalPages = Math.ceil(total / perPage)

  return {
    page,
    perPage,
    total,
    totalPages,
    setPage,
    setPerPage,
    setTotal,
    nextPage: () => setPage(p => Math.min(p + 1, totalPages)),
    prevPage: () => setPage(p => Math.max(p - 1, 1)),
  }
}
