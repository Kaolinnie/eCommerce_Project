Feature: appointPageAdministrator
  In order to better manage the page
  As the original page administrator
  I need to be able to appoint other people as page administrator with a specific permission level

  Scenario: Adding an administrator
  Given A new admin is hired
  When Admin is added to database
  Then Admin has access to database