Given /^I visit the URL of the web application/ do
      visit '/'
      end
 
When /^I log in$/ do
      visit '/login'
      fill_in 'username', :with => 'testuser'
      fill_in 'password', :with => 'test123' 
      click_button 'Login'
      end
 
Then /^I should see the text "([^"]*)"$/ do |text|
     expect(page).to have_content 'Welcome, testuser'
     end

