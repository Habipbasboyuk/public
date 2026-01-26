<section>
        <p class="section-subtitle">// Let's Talk</p>
    <h2 class="section-title">Get in Touch</h2>
    <p class="section-desc">Feel free to reach out to me for any inquiries or opportunities. I'm always open to discussing new projects and collaborations.</p>
    <section>
        <div class="json-terminal">
            <div class="terminal-header">
                <span class="dot red"></span>
                <span class="dot yellow"></span>
                <span class="dot green"></span>
                <span class="terminal-title">contact.json</span>
            </div>
            <div class="terminal-body">
                <pre class="json-code">
                        {
                          <span class="key">"name"</span>: <span class="val">"Habip Basboyuk"</span>,
                          <span class="key">"role"</span>: <span class="val">"Junior Developer"</span>,
                          <span class="key">"status"</span>: <span class="val">"available for work"</span>,
                          <span class="key">"response"</span>: <span class="val">"Within 24 hours"</span>
                        }
                </pre>
            </div>
        </div>

        <article>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mail_icon.svg" alt="Mail">

            <div>
                <h3>Email Me</h3>
                <a href="mailto:basboyukhabip@gmail.com">basboyukhabip@gmail.com</a>
            </div>
            <div>
                <h3>Call Me</h3>
                <a href="tel:+32488407783">+32 488 40 77 83</a>
            </div>
        </article>
    </section>

    <section>
        <form action="">
            <label for="name">Name
                <input type="text" id="name" name="name" required>
            </label>
            <label for="email">Email
                <input type="email" id="email" name="email" required>
            </label>
            <label for="message">Message
                <textarea id="message" name="message" rows="5" required></textarea>
            </label>
            <button type="submit">Send Message</button>
        </form>
    </section>
</section>