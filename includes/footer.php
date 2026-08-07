
          </section>
           <link href="<?= SITE_URL ?>/assets/css/footer.css" rel="stylesheet">
          <footer class="footer">
               <p>&copy; <?php echo date("Y"); ?> Scholarship Management System (SMS).<br>Version 1.0 | College of Maasin</p>
          </footer>

          <?php if (isset($useChart) && $useChart === true): ?>
               <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.umd.js"></script>
               <script src="assets/js/chart.js"></script>
          <?php endif; ?>

          <?php if (isset($page_js)): ?>
               <script src="<?= SITE_URL ?>/assets/js/<?= $page_js ?>"></script>
          <?php endif; ?>
          <script>
            if (typeof lucide !== 'undefined') {
              lucide.createIcons();
            }

            // Top Page Navigation Progress Bar
            document.addEventListener('DOMContentLoaded', () => {
              const bar = document.getElementById('pageProgressBar');
              if (!bar) return;

              // Animate progress on initial load completion
              bar.style.transform = 'scaleX(1)';
              setTimeout(() => {
                bar.style.opacity = '0';
                setTimeout(() => {
                  bar.style.transform = 'scaleX(0)';
                  bar.style.opacity = '1';
                }, 300);
              }, 400);

              // Trigger progress bar when clicking internal links
              document.addEventListener('click', (e) => {
                const link = e.target.closest('a');
                if (link && link.href && !link.target && !link.hasAttribute('download')) {
                  const url = new URL(link.href, window.location.origin);
                  if (url.origin === window.location.origin && url.pathname !== window.location.pathname) {
                    bar.style.opacity = '1';
                    bar.style.transform = 'scaleX(0.7)';
                  }
                }
              });

              window.addEventListener('beforeunload', () => {
                if (bar) {
                  bar.style.opacity = '1';
                  bar.style.transform = 'scaleX(0.9)';
                }
              });

              // Dynamic scroll shadow for seamless top header
              const stickyNav = document.querySelector('.top-nav-sticky');
              if (stickyNav) {
                const handleScroll = () => {
                  if (window.scrollY > 10) {
                    stickyNav.classList.add('is-scrolled');
                  } else {
                    stickyNav.classList.remove('is-scrolled');
                  }
                };
                window.addEventListener('scroll', handleScroll, { passive: true });
                handleScroll();
              }

              // Fetch actual notification count for header badge
              const badgeEl = document.getElementById('navNotifBadge');
              if (badgeEl && typeof apiListNotifications === 'function') {
                apiListNotifications().then(res => {
                  const count = (res.data || []).length;
                  badgeEl.textContent = count;
                  if (count === 0) {
                    badgeEl.style.display = 'none';
                  } else {
                    badgeEl.style.display = 'inline-flex';
                  }
                }).catch(() => {
                  badgeEl.style.display = 'none';
                });
              }
            });
          </script>
    </body>


</html>