    <div class="col-xs-12 col-md-8 col-md-offset-2 text-center">
        <h2 class="section-heading">Quick message</h2>
          <?php if (!empty($_SESSION['message'])) : ?>
              <p style="color: red;"><?php echo($_SESSION['message']); ?></p>
          <?php endif; ?>
        <hr class="primary">
        <p>Drop us a quick note about your project. We’ll get in touch shortly to discuss your ideas and your visions.</p>
    </div>
    <form name="contactform" method="post" action="index.php">
          <div class="col-sm-5 col-md-4 col-sm-offset-1 col-md-offset-2 text-center">
            <div class="form-group">
                   <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
            </div>
            <div class="form-group">
                   <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject" required>
            </div>
          </div>
          <div class="col-sm-5 col-md-4 text-center">
            <div class="form-group">
                   <textarea id="message" class="form-control" rows="4" placeholder="Message" name="message" required></textarea>
            </div>
          </div>
          <div class="col-sm-8 col-sm-offset-2 text-center">
                  <button type="submit" class="btn btn-default btn-xl sr-button" name="submit" value="submit">Send message</button>
          </div>
    </form>
