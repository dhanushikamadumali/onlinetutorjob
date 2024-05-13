import { api } from "../index";


export default {
  async addJob(payload) {
    return await api.post("/addjob", payload)
  },

  async alljob() {
    return await api.get("/alljobs");
  },

  async updatejob(payload, id) {
    return await api.put(`/updatejob/${id}`, payload);
  },

  async deletejob(id) {
    return await api.delete(`/deletejob/${id}`);
  },
};
