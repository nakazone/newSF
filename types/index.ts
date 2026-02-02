export interface Service {
  id: string
  name: string
  slug: string
  description: string
  shortDescription: string
  icon: string
  keywords: string[]
  benefits: string[]
  process: Array<{
    step: number
    title: string
    description: string
  }>
  faqs: Array<{
    question: string
    answer: string
  }>
}

export interface City {
  id: string
  name: string
  slug: string
  state: string
  zipCode: string
  neighborhoods: string[]
  coordinates?: {
    lat: number
    lng: number
  }
}

export interface Review {
  id: string
  author: string
  rating: number
  text: string
  date: string
  city?: string
  service?: string
  verified?: boolean
}

export interface BlogPost {
  id: string
  title: string
  slug: string
  excerpt: string
  content: string
  publishedAt: string
  author: string
  category: string
  tags: string[]
  city?: string
  featuredImage?: string
}
