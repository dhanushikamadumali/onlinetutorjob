import axios from "axios";
import { toast } from "@/Notifications/toast";

export const api = axios.create({
  baseURL: import.meta.env.VITE_API_ENDPOINT,
});

api.interceptors.request.use(
  function (config) {
    if (localStorage.token) {
      config.headers.Authorization = `Bearer ${localStorage.token}`;
    }

    return config;
  },
  function (error) {
    // Do something with request errora
    return Promise.reject(error);
  }
);

api.interceptors.response.use(
  function (response) {
    return response;
  },

  function (error) {
    
    console.log(error);

    if (error.response.status === 404) {
      toast("Not Found", "error");
    } else if (error.response.status === 400) {
      toast("Bad Request", "warning");
    } else if (error.response.status === 422) {
      toast("Given Data Is Invalid", "error");
    } else if (error.response.status === 500) {
      toast("Internal Server Erros", "danger");
    }

    return Promise.reject(error);
  }
);
