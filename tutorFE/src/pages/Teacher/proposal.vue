<!-- eslint-disable vue/multi-word-component-names -->
<template>
    <div>
        <div class="main_label">
            <div class="pt-3"></div>
            <center><span class="main_heading"> Add Proposal</span></center>
        </div>

        <div>
            <!--starting  jobs request form -->
            <v-container>
                <v-form @submit.prevent>
                    <label class="form_header">Bit amount</label>
                    <div class="pt-8"></div>
                    <v-text-field v-model="form.bitamount" :rules="[required]" variant="solo"></v-text-field>

                    <label class="form_header">Bit Description</label>
                    <div class="pt-8"></div>
                    <v-textarea v-model="form.bitdescription" :rules="[required]" variant="solo"></v-textarea>






                    <v-btn type="submit" block height="80px" style="text-transform: capitalize" color="#20349E"
                        @click="addRequest()"><span class="button_styles">Submit Request</span></v-btn>
                </v-form>
            </v-container>

            <!--end of jobs request form -->
        </div>
    </div>
</template>

<script>

import proposalApi from "@/Api/Modules/proposals";
export default {
    data() {
        return {
            form: {},
            id: this.$route.params.id,

        };
    },

    methods: {

        required(v) {
            return !!v || "Field is required";
        },

        async addRequest() {
            await proposalApi.addProposal(this.form, this.id);
        },

    },
};
</script>
