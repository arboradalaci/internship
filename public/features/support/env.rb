require 'capybara/mechanize'
require 'capybara/cucumber'

Capybara.default_driver = :mechanize
Capybara.app = 'not null'
Capybara.app_host = 'http://localhost:8090/internship/public'





