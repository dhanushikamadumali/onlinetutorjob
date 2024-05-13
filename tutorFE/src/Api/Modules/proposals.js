import { api } from "../index";

export default {
  async addProposal(payload, id) {
    return await api.post(`/addproposal/${id}`, payload);
  },

  async allProposals() {
    return await api.get("/allproposals");
  },

  async updateProposal(payload, id) {
    return await api.put(`/updateproposal/${id}`, payload);
  },

  async deleteProposal(id) {
    return await api.delete(`/deleteproposal/${id}`);
  },
};
