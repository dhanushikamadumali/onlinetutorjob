import { api } from "../index";

export default {
  async addCategory(payload) {
    return await api.post("/addcategory", payload).then(() => {
      // window.location.href = "/allcategories";
    });
  },

  async allCategory() {
    return await api.get("/allcategories");
  },

  async updateCategory(id, payload) {
    return await api.put(`/updatecategory/${id}`, payload).then(() => {
      window.location.href = "/allcategories";
    });
  },

  async deleteCategory(id) {
    return await api.delete(`/deletecategory/${id}`).then(() => {
      window.location.href = "/allcategories";
    });
  },
};
