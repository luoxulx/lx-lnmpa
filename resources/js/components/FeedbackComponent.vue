<template>
  <form id="form-contact" method="post" class="clearfix ts-form ts-form-email" data-php-path="assets/php/email.php">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <div class="form-group">
          <label for="form-contact-name">Name *</label>
          <input type="text" class="form-control" id="form-contact-name" v-model="form.nickname" placeholder="Name" required>
        </div>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="form-group">
          <label for="form-contact-email">Email *</label>
          <input type="email" class="form-control" id="form-contact-email" v-model="form.email" placeholder="Email" required>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="form-contact-message">Message *</label>
          <textarea class="form-control" id="form-contact-message" rows="5" v-model="form.content" placeholder="Message" required></textarea>
        </div>
      </div>
    </div>
    <div class="form-group clearfix">
      <button type="submit" class="btn btn-primary float-right ts-btn-arrow" id="form-contact-submit">SUBMIT</button>
    </div>
    <div class="form-contact-status"></div>
  </form>
</template>

<script>
  export default {
    name: "Feedback",
    components: {},
    data () {
      return {
        form: {
          nickname: '',
          email: '',
          content: '',
        }
      }
    },
    mounted() {
      window.axios.get('/test').then((response)=>{
        console.log(response)
      })
    }
  }
</script>
