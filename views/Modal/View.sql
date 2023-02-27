SELECT `HR.Occupantinfo`.`PID`, `HR.Occupantinfo`.`CouponFamilyID`, `HR.Occupantinfo`.`CouponFileNumber`, `EritreanNames_1.EnglishNames` AS FirstName, `MOL.EritreanNames`.`EnglishNames` AS MiddleName, `EritreanNames_2.EnglishNames` AS LastName, `EritreanNames_7.EnglishNames` AS MotherFirstName, `EritreanNames_6.EnglishNames` AS MotherMiddleName, 
          `EritreanNames_5.EnglishNames` AS MotherLastName, `HR.Occupantinfo`.`BirthDate`, `HR.Occupantinfo`.`FamilyNumber`, `HR.Occupantinfo`.`EntryDateCamp`, `HR.Occupantinfo`.`Picture`, `HR.Occupantinfo`.`Gender`, `HR.Occupantinfo`.`NationalID`, `HR.Occupantinfo`.`ResidentID`, `HR.Occupantinfo`.`GroupGas`,`COMPANY.Organization`.`OrganizationName`,` WLO.JobsLevelFive`.`LevelFiveJobs` AS CurrentJobs, 
          `COMPANY.LookupItem`.`Name` AS `Nationality`, `LookupItem_3.Name` AS `Ethinicity`, `LookupItem_1.Name` AS MaritalStatus, `LookupItem_4.Name` AS EmployeementClass, `LookupItem_2.Name` AS EmployeementStatus, `HR.Occupantinfo`.`NetSalary`, `HR.Occupantinfo`.`Religion`, `HR.Occupantinfo`.`CampRegion`, `HR.Occupantinfo`.`Remark`, `HR.Occupantinfo`.`Who`, `HR.Occupantinfo`.`Timestamp`
FROM   `HR.Occupantinfo` INNER JOIN
          `COMPANY.LookupItem` ON `HR.Occupantinfo`.`Nationality` = `COMPANY.LookupItem`.Id LEFT OUTER JOIN
          `MOL.EritreanNames` AS EritreanNames_1 ON `HR.Occupantinfo`.`FirstName` = `EritreanNames_1.ID` LEFT OUTER JOIN
          `MOL.EritreanNames` ON `HR.Occupantinfo`.`MiddleName` = `MOL.EritreanNames`.`ID` LEFT OUTER JOIN
          `MOL.EritreanNames` AS EritreanNames_2 ON `HR.Occupantinfo`.`LastName` = `EritreanNames_2.ID` LEFT OUTER JOIN
          `MOL.EritreanNames` AS EritreanNames_7 ON `HR.Occupantinfo`.`MotherFirstName` = `EritreanNames_7.ID` LEFT OUTER JOIN
          `MOL.EritreanNames` AS EritreanNames_6 ON `HR.Occupantinfo`.`MotherMiddleName` = `EritreanNames_6.ID` LEFT OUTER JOIN
          `MOL.EritreanNames` AS EritreanNames_5 ON `HR.Occupantinfo`.`MotherLastName` = `EritreanNames_5.ID` LEFT OUTER JOIN
          `COMPANY.LookupItem` AS LookupItem_4 ON `HR.Occupantinfo`.`EmployeementClass` = `LookupItem_4.Id` LEFT OUTER JOIN
         `WLO.JobsLevelFive` ON `HR.Occupantinfo`.`CurrentJobs` =`WLO.JobsLevelFive`.`ID` LEFT OUTER JOIN
         `COMPANY.Organization` ON `HR.Occupantinfo`.`CurrentOrganizatio`n =`COMPANY.Organization`.`OrganizationID` LEFT OUTER JOIN
          `COMPANY.LookupItem` AS LookupItem_3 ON `HR.Occupantinfo`.`Ethinicity` = `LookupItem_3.Id` LEFT OUTER JOIN
          `COMPANY.LookupItem` AS LookupItem_1 ON `HR.Occupantinfo`.`MaritalStatus` = `LookupItem_1.Id` LEFT OUTER JOIN
          `COMPANY.LookupItem` AS LookupItem_2 ON `HR.Occupantinfo`.`EmployeementStatus` = `LookupItem_2.Id` LEFT OUTER JOIN
          `COMPANY.LookupItem` AS LookupItem_6 ON `HR.Occupantinfo`.`CurrentJobs` = `LookupItem_6.Id`