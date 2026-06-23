<?php
$page_title = "Contact | Priyamvada Singh";
$page_description = "Book a Tarot reading, enroll in a course, or reach out to Priyamvada Singh for spiritual guidance.";
include 'header.php';

// Handle form submission
$form_submitted = false;
$form_error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate form data
    $fname = isset($_POST['fname']) ? htmlspecialchars($_POST['fname']) : '';
    $lname = isset($_POST['lname']) ? htmlspecialchars($_POST['lname']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
    $service = isset($_POST['service']) ? htmlspecialchars($_POST['service']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';
    
    // Basic validation
    if (empty($fname) || empty($lname) || empty($email) || empty($service) || empty($message)) {
        $form_error = "Please fill in all required fields.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $form_error = "Please enter a valid email address.";
    } else {
        // Here you can add email sending logic or database storage
        // For now, we'll just show a success message
        $form_submitted = true;
        
        // Example: Send email (uncomment and configure)
        // $to = "priyamvada@example.com";
        // $subject = "New Contact Form Submission from $fname $lname";
        // $body = "Name: $fname $lname\nEmail: $email\nPhone: $phone\nService: $service\n\nMessage:\n$message";
        // mail($to, $subject, $body);
    }
}
?>

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="container text-center">
    <div class="breadcrumb">
      <a href="index.php">Home</a>
      <span>›</span>
      <span>Contact</span>
    </div>
    <span class="eyebrow">Get in Touch</span>
    <h1>Let's Connect</h1>
    <p style="color:var(--text-muted);font-size:1.05rem;max-width:500px;margin:12px auto 0;">Ready to begin your journey? Reach out to book a session, enroll in a course, or simply ask a question.</p>
  </div>
</section>

<!-- CONTACT MAIN -->
<section class="section-pad">
  <div class="container">
    <div class="contact-grid">

      <!-- LEFT: Info Card -->
      <div>
        <div class="contact-info-card">
          <h3>Contact Information</h3>
          <p>Fill in the form and I'll get back to you within 24 hours. You can also reach me directly:</p>

          <div class="contact-item">
            <div class="contact-item-icon">📞</div>
            <div>
              <div class="contact-item-label">Phone / WhatsApp</div>
              <div class="contact-item-val">+91 99999 99999</div>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-item-icon">📧</div>
            <div>
              <div class="contact-item-label">Email</div>
              <div class="contact-item-val">priyamvada@example.com</div>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-item-icon">📍</div>
            <div>
              <div class="contact-item-label">Location</div>
              <div class="contact-item-val">New Delhi, India</div>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-item-icon">🕐</div>
            <div>
              <div class="contact-item-label">Working Hours</div>
              <div class="contact-item-val">Mon–Sat · 10 AM – 7 PM IST</div>
            </div>
          </div>

          <div class="contact-social">
            <p>Follow me on social media</p>
            <div class="cs-links">
              <a href="#" title="Instagram">📸</a>
              <a href="#" title="YouTube">▶</a>
              <a href="#" title="Facebook">f</a>
              <a href="#" title="WhatsApp">💬</a>
            </div>
          </div>
        </div>

        <!-- Quick Services -->
        <div style="margin-top:24px;background:var(--white);border-radius:20px;padding:28px;border:1px solid var(--border);">
          <h4 style="font-size:0.95rem;margin-bottom:16px;color:var(--dark);">Quick Booking</h4>
          <div style="display:flex;flex-direction:column;gap:10px;">
            <a href="https://wa.me/919999999999?text=Hi+Priyamvada%2C+I%27d+like+to+book+a+Tarot+Reading" target="_blank" class="btn btn-primary" style="justify-content:center;">💬 WhatsApp for Quick Booking</a>
            <a href="mailto:priyamvada@example.com" class="btn btn-outline" style="justify-content:center;">📧 Send an Email</a>
          </div>
        </div>
      </div>

      <!-- RIGHT: Form -->
      <div class="contact-form-wrap">
        <h3>Send a Message</h3>
        <p>Tell me what you're looking for and I'll reach out to you personally.</p>
        
        <?php if ($form_submitted): ?>
          <div style="background:#e8f5e9;color:#2e7d32;padding:16px;border-radius:12px;margin-bottom:24px;border-left:4px solid #2e7d32;">
            <strong>✓ Thank you!</strong> Your message has been received. I'll get back to you within 24 hours.
          </div>
        <?php endif; ?>
        
        <?php if (!empty($form_error)): ?>
          <div style="background:#ffebee;color:#c62828;padding:16px;border-radius:12px;margin-bottom:24px;border-left:4px solid #c62828;">
            <strong>⚠ Error:</strong> <?php echo $form_error; ?>
          </div>
        <?php endif; ?>

        <form class="contact-form" method="POST" action="contact.php">
          <div class="form-row">
            <div class="form-group">
              <label for="fname">First Name *</label>
              <input type="text" id="fname" name="fname" placeholder="Priya" required />
            </div>
            <div class="form-group">
              <label for="lname">Last Name *</label>
              <input type="text" id="lname" name="lname" placeholder="Sharma" required />
            </div>
          </div>
          <div class="form-group">
            <label for="email">Email Address *</label>
            <input type="email" id="email" name="email" placeholder="you@example.com" required />
          </div>
          <div class="form-group">
            <label for="phone">Phone / WhatsApp</label>
            <input type="tel" id="phone" name="phone" placeholder="+91 98765 43210" />
          </div>
          <div class="form-group">
            <label for="service">Service of Interest *</label>
            <select id="service" name="service" required>
              <option value="">— Select a service —</option>
              <option>Tarot Reading – Love &amp; Relationships</option>
              <option>Tarot Reading – Career &amp; Finance</option>
              <option>Spiritual Guidance Session</option>
              <option>Oracle Card Reading</option>
              <option>Tarot Foundational Course</option>
              <option>Advanced Tarot Mastery</option>
              <option>Life Coaching</option>
              <option>Corporate Workshop</option>
              <option>Other / General Enquiry</option>
            </select>
          </div>
          <div class="form-group">
            <label for="message">Your Message *</label>
            <textarea id="message" name="message" placeholder="Tell me what you're seeking clarity on, or any questions you have..." required></textarea>
          </div>
          <div class="form-group" style="margin-bottom:0;">
            <label style="display:flex;align-items:flex-start;gap:10px;cursor:pointer;font-weight:400;">
              <input type="checkbox" style="width:auto;margin-top:3px;" required />
              <span style="font-size:0.85rem;color:var(--text-muted);">I consent to being contacted by Priyamvada Singh regarding my enquiry. My information will not be shared with third parties.</span>
            </label>
          </div>
          <div style="margin-top:24px;">
            <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;padding:16px;">Send Message 🔮</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- MAP SECTION -->
<section class="section-pad-sm" style="padding-top:0;">
  <div class="container">
    <div style="text-align:center;margin-bottom:32px;">
      <span class="eyebrow">Location</span>
      <h2 class="section-title">Find Me in New Delhi</h2>
      <p class="section-subtitle">In-person sessions available. Online sessions available worldwide via Zoom.</p>
    </div>
    <div class="map-wrap">
      <!-- Replace with actual Google Maps embed -->
      <div class="map-placeholder">
        <div class="mi">📍</div>
        <p style="font-weight:600;color:var(--dark);margin-bottom:6px;">New Delhi, India</p>
        <p style="font-size:0.85rem;">Exact address shared upon booking confirmation</p>
      </div>
    </div>
    <p style="text-align:center;font-size:0.82rem;color:var(--text-muted);margin-top:16px;">
      <strong>Note:</strong> Exact address is shared after booking is confirmed. Online sessions available worldwide.
    </p>
  </div>
</section>

<!-- FAQ -->
<section class="section-pad faq-section">
  <div class="container text-center">
    <span class="eyebrow">FAQ</span>
    <h2 class="section-title">Before You Book</h2>
    <p class="section-subtitle" style="margin-bottom:48px;">Common questions answered.</p>
    <div class="faq-list">
      <div class="faq-item">
        <button class="faq-q">How soon will I get a response after submitting the form? <span class="arrow">▾</span></button>
        <div class="faq-a"><p>I personally respond to all enquiries within 24 hours, usually much sooner. For urgent bookings, WhatsApp is the fastest option.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q">Can I reschedule or cancel a booking? <span class="arrow">▾</span></button>
        <div class="faq-a"><p>Yes! Rescheduling is free if done at least 24 hours in advance. Cancellations made within 24 hours of the session are non-refundable.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q">What should I prepare before my session? <span class="arrow">▾</span></button>
        <div class="faq-a"><p>Come with an open mind and ideally one or two specific questions or areas of life you'd like guidance on. A quiet, private space for the session is recommended.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q">Do you offer sessions in Hindi? <span class="arrow">▾</span></button>
        <div class="faq-a"><p>Yes! Sessions are available in both Hindi and English. Please mention your language preference when booking.</p></div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
