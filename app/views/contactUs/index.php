<!-- Contact Us -->
<div class="container">
    <div class="main-content contact-img">
    <div class="row">
        <div class="col m4 s12 center">
            
        </div>
        
    </div>
            

    </div>
</div>

<section id="contact" class="contact">
      <div class="container">
          <h3 class=""light grey-text text-darken-3 center>Contact</h3>
          <div class="row">
              <div class="col m5 s12">
                  <div class="card-panel brown lighten-3 center white-text">
                      <i class="material-icons">email</i>
                      <h5>Contact</h5>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, sit!</p>       
                  </div>
                  <ul class="collection with-header">
                      <li class="collection-header"><h4>Our Office</h4></li>
                      <li class="collection-item">EGAXAVIER</li>
                      <li class="collection-item">Jalan sakti kabanjahe, Karo</li>
                      <li class="collection-item">North Sumatra, Indonesia</li>
                  </ul> 
              </div> 
              <div class="col m7 s12">
                  <form  action="<?= BASEURL; ?>/costumer/tambah" method="post">
                      <div class="card-panel">
                          <h5>Get in touch</h5> 
                          <p>I Look forward to hearing from you!</p>
                          <div class="input-field">
                              <input type="text" name="nm_cust" id="nm_cust" required class="validate">
                              <label for="nm_cust">Name</label>
                          </div>
                          <div class="input-field">
                              <input type="text" name="alamat" id="alamat" required class="validate">
                              <label for="alamat">Address</label>
                          </div>
                          <div class="input-field">
                              <textarea type="number" name="no_hp" id="no_hp"
                              class="materialize-textarea" cols="30" rows="10"></textarea>
                              <label for="name">Phone Number</label>
                          </div>
                          <div class="input-field">
                              <input type="email" name="email_cust" id="email_cust" class="validate">
                              <label for="email_cust">Email</label>
                          </div>
                          <div class="input-field col s6">
          <i class="material-icons prefix">mode_edit</i>
          <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
          <label for="icon_prefix2">First Name</label>
        </div>
                          <button type="submit" class="btn brown darken-3">Send<i class="material-icons right">send</i></button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </section>