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
      
     <?php 
      $contact_form = "[contact-form to='andrew.duckworth@sth.nhs.uk' subject='RPA Contact'][contact-field label='Full name' type='name' required='1' placeholder='Full name'/][contact-field label='Job title' type='text' required='1' placeholder='Job title'/][contact-field label='Organisation' type='text' required='1' placeholder='Organisation'/][contact-field label='Phone number' type='text' required='1' placeholder='phone number'/][contact-field label='Email' type='email' required='1' placeholder='Email'/][contact-field label='Service requested' type='select' required='1' options='Radiation Protection,Service Design %26amp; Consultation,Quality Assurance,Corporate Assurance,Project Management,Training %26amp; Staff Development,Ethics Guidance,Other'/][contact-field label='Requirements %26amp; further information' type='textarea' required='1' placeholder='Your requirements'/][/contact-form]";
      echo do_shortcode( "<section id='contact-form-home'>" . $contact_form . "</section>" ) ;?>
      
    </div>
  
  <?php get_template_part( 'template-parts/shared/service', 'directory' ) ;?>
  
  </div>