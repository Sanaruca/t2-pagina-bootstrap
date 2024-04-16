check:
	@if ! which php > /dev/null; then \
  echo "ERROR: PHP is not installed on this system."; \
  echo "Please install PHP and try again."; \
  exit 1; \
  fi
