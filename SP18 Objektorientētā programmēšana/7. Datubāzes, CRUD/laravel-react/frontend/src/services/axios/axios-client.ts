import axios, { AxiosRequestConfig, AxiosResponse } from 'axios'

const axiosClient = axios.create({
  baseURL: `${process.env.REACT_APP_BASE_URL}/api`
})

axiosClient.interceptors.request.use((config: AxiosRequestConfig<any>) => {
  const token = localStorage.getItem('ACCESS_TOKEN')

  if (token && config.headers?.Autorization)
    config.headers.Authorization = `Bearer ${token}`

  return config
})

axiosClient.interceptors.response.use((response: AxiosResponse<any, any>) => response,
  (error: any) => {
    switch (error.response?.status) {
      case 401:
        localStorage.removeItem('ACCESS_TOKEN')
        console.log(`token is expired or incorrect. Full error: ${error}`)
        break;
      case 403:
        localStorage.removeItem('ACCESS_TOKEN')
        console.log(`Token is valid, but does not grant privilegies to view this content. Full error: ${error}`)
        break;
      default:
        console.log(`Unhandled error in axios-client.ts: ${error}`)
        break;
    }
  })
export default axiosClient