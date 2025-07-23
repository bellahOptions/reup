<!-- includes/footer.php -->
<!-- Bootstrap JS CDN -->
<style type="text/css">
	.final-footer{
	border-top: 1px solid var(--green);
	padding: 20px 10px;
}
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    lucide.createIcons();

    // Sidebar toggle for mobile
    const sidebar = document.getElementById("sidebarMenu");
    const toggleBtn = document.getElementById("sidebarToggle");

    toggleBtn?.addEventListener("click", () => {
      sidebar.classList.toggle("show");
    });
  </script>
  <script type="text/javascript">
  	const menuToggle = document.getElementById('menuToggle');
const sidebar = document.getElementById('sidebar');

menuToggle.addEventListener('click', () => {
  sidebar.classList.toggle('show');
});

  </script>
    <!-- FOOTER -->
  <footer class="final-footer container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2025 Bellah Options, BN3668420 &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>
</body>
</html>