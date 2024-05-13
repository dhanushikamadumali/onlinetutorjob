import { api } from "../index";
import { toast } from "@/Notifications/toast";

export default {
  async register(payload) {
    return await api
      .post("/register", payload)
      .then(() => {
        toast("Successfully register", "success");
        window.location.href='/'
      })
      .catch(() => {});
  },

  async allusers() {
    return await api.get("/index");
  },

  // async updateuser(id, payload) {
  //   return await api.put(`/updateuser/${id}`, payload).then(() => {});
  // },

  async deleteuser(id) {
    return await api.delete(`/deleteuser/${id}`).then(() => {});
  },
  // async deleteuser(id) {
  //   return await api.delete(`/deleteuser/${id}`).then(() => {});
  // },

  async login(payload) {
    return await api.post("/login", payload).then((res) => {
      localStorage.setItem("token", res.data.data.access_token);
      toast("Successfully login", "success");
      window.location.href='/'
    });
  },
  async allteacher() {
    return await api.get("/viewteacher");
  },
  async singleteacher(id) {
    return await api.get(`/singleteacher/${id}`);
  },
  async logout() {
    return await api.post("/logout").then(() => {
      localStorage.clear();
      toast("Successfully logout", "success");
      window.location.href='/'
    });
  },
};
