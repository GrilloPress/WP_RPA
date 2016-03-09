<div class="row">
  <div class="col-md-12" id="our-services">
      <h2 class="section-header">Our Services</h2>
  </div>
    
    <div class="col-md-5 col-md-offset-1">
      <section class="service-text">
        <p class="lead">Our Radiation Protection Assurance (RPA) service offers our clients comprehensive and high quality radiation protection services that are tailored to their individual needs.</p>
        <p>We deliver corporate assurance to our clients through advice which is both proactive and responsive but proportionate and relevant to their service requirements, providing radiation protection advice to hospitals, healthcare services and industry on:</p>
        <ul>
          <li>Healthcare Imaging</li>
          <li>Sealed and unsealed radioactive sources</li>
          <li>Therapy Treatment (External Beam Radiotherapy and Nuclear Medicine Therapy)</li>
          <li>Clinical Research</li>
          <li>Disposal of radioactive clinical waste</li>
          <li>Radiation Protection Design</li>
        </ul>
       <p>We also provide Quality Assurance (QA) advice for users of these modalities:</p>
        <ul>
          <li>X-rays</li>
          <li>Sealed and Unsealed radioactive sources </li>
          <li>External Beam or Brachytherapy Radiotherapy</li>
          <li>Magnetic Resonance Imaging (MRI)</li>
          <li>Ultrasound</li>
          <li>Lasers</li>
          <li>Ultraviolet light</li>
        </ul>
        <p>As part of one of the largest Medical Physics and Clinical Engineering Departments within one of the leading NHS Teaching Hospitals in the UK, we have have access to specialist electronic, mechanical and software engineering design and fabrication facilities, enabling us to fully support all of our client’s service requirements.</p>
        <p>For more information about our services, see our <a href="<?php echo home_url('/our-services/#services-listing'); ?>">detailed service listing</a> or get in touch with out team via our online form.</p>
      </section>
    </div>
    
    <div class="col-md-4 col-md-offset-1">
      
     <form id="service-request-form">
      <div class="form-group">
        <label for="customerName">Full name <span class="required">(required)</span></label>
      <input type="text" class="form-control" id="customerName" placeholder="Full Name" required="">
      </div>
      <div class="form-group">
        <label for="jobTitle">Job Title <span class="required">(required)</span></label>
      <input type="text" class="form-control" id="jobTitle" placeholder="Job Title" required="">
      </div>
      <div class="form-group">
        <label for="customerCompany">Organisation <span class="required">(required)</span></label>
      <input type="text" class="form-control" id="customerCompany" placeholder="Organization" required="">
      </div>
      <div class="form-group">
        <label for="phoneNumber">Phone Number <span class="required">(required)</span></label>
      <input type="tel" class="form-control" id="phoneNumber" placeholder="Phone Number" required="">
      </div>
      <div class="form-group">
        <label for="customerEmail">Email address <span class="required">(required)</span></label>
        <input type="email" class="form-control" id="customerEmail" placeholder="Email" required="">
      </div>
      <div class="form-group">
        <label for="servicesRequired">Service Requested</label>
        <select class="form-control" id="servicesRequired">
        <option>Radiation Protection</option>
        <option>Service Design &amp; Consultation</option>
        <option>Quality Assurance</option>
        <option>Corporate Assurance</option>
        <option>Project Management</option>
        <option>Training &amp; Staff Development</option>
        <option>Ethics Guidance</option>
        <option>Other</option>
      </select>
      </div>
      <div class="form-group">
        <label for="customerMessage">Requirements &amp; Further Information</label>
        <textarea class="form-control" id="customerMessage" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-lg btn-block btn-info">Get in touch</button>
    </form>
    </div>
  
  <?php get_template_part( 'template-parts/shared/service', 'directory' ) ;?>
  
  </div>