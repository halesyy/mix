<?php
  session_start();

  $str = 'a:1:{s:4:"form";a:2:{s:8:"students";a:1:{i:0;s:2505:"O:7:"Student":8:{s:8:"Personal";a:18:{s:5:"fname";s:4:"Jack";s:5:"lname";s:5:"Hales";s:5:"mname";s:7:"Geoffry";s:5:"pname";s:0:"";s:11:"yearToEnrol";s:4:"2018";s:9:"yearLevel";s:2:"11";s:6:"gender";s:4:"male";s:11:"dateOfBirth";s:10:"2001-05-15";s:11:"nationality";N;s:9:"isStudent";a:2:{s:10:"aboriginal";s:4:"true";s:14:"torresStraitIs";s:4:"true";}s:14:"languageAtHome";s:10:"Australian";s:7:"address";s:10:"7 Ferry St";s:4:"town";s:7:"Kempsey";s:5:"state";s:15:"New South Wales";s:8:"postCode";s:4:"2440";s:9:"livesWith";s:3:"Mom";s:8:"religion";s:12:"Presbyterian";s:8:"prekindy";a:2:{s:5:"week1";a:5:{s:6:"monday";s:4:"true";s:7:"tuesday";s:4:"true";s:9:"wednesday";s:4:"true";s:8:"thursday";s:4:"true";s:6:"friday";s:4:"true";}s:5:"week2";a:5:{s:6:"monday";s:4:"true";s:7:"tuesday";s:4:"true";s:9:"wednesday";s:4:"true";s:8:"thursday";s:4:"true";s:6:"friday";s:4:"true";}}}s:9:"Education";a:5:{s:15:"hasBeenExpelled";s:5:"false";s:16:"hasBeenSuspended";s:5:"false";s:14:"hasBeenRefused";s:5:"false";s:7:"details";s:6:"... :D";s:14:"previousSchool";s:26:"East Kempsey Public School";}s:9:"Behaviour";a:5:{s:19:"hasDisciplineIssues";s:5:"false";s:15:"hasBeenArrested";s:5:"false";s:20:"usedAlcoholOrTobacco";s:5:"false";s:16:"usedIllegalDrugs";s:5:"false";s:7:"explain";s:0:"";}s:7:"Medical";a:3:{s:16:"DoctorHealthFund";a:4:{s:7:"private";a:3:{s:9:"ambulance";s:5:"false";s:10:"healthFund";s:5:"false";s:18:"companyAndMemberId";s:0:"";}s:14:"medicareNumber";s:11:"24186893351";s:18:"medicareExpiryDate";s:7:"09/2017";s:22:"medicarePositionOnCard";s:1:"1";}s:18:"MedicalInformation";a:4:{s:10:"doctorName";s:5:"Ruben";s:11:"doctorPhone";s:1:"#";s:11:"isImmunised";s:4:"true";s:5:"wears";a:2:{s:7:"glasses";s:4:"true";s:8:"contacts";s:4:"true";}}s:17:"MedicalConditions";a:2:{s:3:"has";a:7:{s:6:"asthma";s:4:"true";s:4:"adhd";s:4:"true";s:8:"diabetes";s:4:"true";s:9:"epilepsey";s:5:"false";s:6:"autism";s:5:"false";s:9:"allergies";s:4:"true";s:7:"explain";s:28:"Has Supporting Documentation";}s:17:"earlyIntervention";s:4:"true";}}s:9:"Emergency";a:2:{i:0;a:3:{s:4:"name";s:18:"Christian Aquilina";s:5:"phone";s:10:"0430525909";s:12:"relationship";s:5:"Uncle";}i:1;a:3:{s:4:"name";s:12:"Randal Jones";s:5:"phone";s:10:"0430525909";s:12:"relationship";s:6:"Mother";}}s:9:"HasFamily";b:0;s:8:"FamilyID";b:0;s:4:"Fees";a:1:{s:16:"enrolment-prices";a:13:{i:0;i:1725;i:1;i:1725;i:2;i:1725;i:3;i:1725;i:4;i:1725;i:5;i:1725;i:6;i:1725;i:7;i:2045;i:8;i:2045;i:9;i:2415;i:10;i:2415;i:11;i:2750;i:12;i:2750;}}}";}s:8:"families";a:1:{i:0;s:6382:"O:6:"Family":30:{s:6:"Mother";a:16:{s:5:"fname";s:6:"Ellise";s:5:"lname";s:8:"Aquilina";s:10:"occupation";s:0:"";s:11:"nationality";s:0:"";s:13:"firstLanguage";s:0:"";s:8:"employer";s:0:"";s:8:"religion";s:0:"";s:14:"placeOfWorship";s:0:"";s:9:"homePhone";s:0:"";s:13:"businessPhone";s:0:"";s:11:"mobilePhone";s:0:"";s:7:"address";s:0:"";s:4:"town";s:0:"";s:5:"state";s:0:"";s:8:"postcode";s:0:"";s:5:"email";s:0:"";}s:6:"Father";a:16:{s:5:"fname";s:4:"Jeff";s:5:"lname";s:5:"Hales";s:10:"occupation";s:0:"";s:11:"nationality";s:0:"";s:13:"firstLanguage";s:0:"";s:8:"employer";s:0:"";s:8:"religion";s:0:"";s:14:"placeOfWorship";s:0:"";s:9:"homePhone";s:0:"";s:13:"businessPhone";s:0:"";s:11:"mobilePhone";s:0:"";s:7:"address";s:0:"";s:4:"town";s:0:"";s:5:"state";s:0:"";s:8:"postcode";s:0:"";s:5:"email";s:0:"";}s:8:"Guardian";a:16:{s:5:"fname";s:0:"";s:5:"lname";s:0:"";s:10:"occupation";s:0:"";s:11:"nationality";s:0:"";s:13:"firstLanguage";s:0:"";s:8:"employer";s:0:"";s:8:"religion";s:0:"";s:14:"placeOfWorship";s:0:"";s:9:"homePhone";s:0:"";s:13:"businessPhone";s:0:"";s:11:"mobilePhone";s:0:"";s:7:"address";s:0:"";s:4:"town";s:0:"";s:5:"state";s:0:"";s:8:"postcode";s:0:"";s:5:"email";s:0:"";}s:10:"Conditions";a:13:{s:14:"motherDeceased";s:5:"false";s:14:"fatherDeceased";s:5:"false";s:15:"motherRemarried";s:5:"false";s:15:"fatherRemarried";s:5:"false";s:7:"married";s:5:"false";s:7:"defacto";s:5:"false";s:16:"parentsSeperated";s:5:"false";s:15:"parentsDivorced";s:5:"false";s:6:"single";s:5:"false";s:8:"guardian";s:5:"false";s:10:"stepParent";s:5:"false";s:11:"grandparent";s:5:"false";s:10:"courtOrder";s:5:"false";}s:8:"Students";a:1:{i:0;s:2505:"O:7:"Student":8:{s:8:"Personal";a:18:{s:5:"fname";s:4:"Jack";s:5:"lname";s:5:"Hales";s:5:"mname";s:7:"Geoffry";s:5:"pname";s:0:"";s:11:"yearToEnrol";s:4:"2018";s:9:"yearLevel";s:2:"11";s:6:"gender";s:4:"male";s:11:"dateOfBirth";s:10:"2001-05-15";s:11:"nationality";N;s:9:"isStudent";a:2:{s:10:"aboriginal";s:4:"true";s:14:"torresStraitIs";s:4:"true";}s:14:"languageAtHome";s:10:"Australian";s:7:"address";s:10:"7 Ferry St";s:4:"town";s:7:"Kempsey";s:5:"state";s:15:"New South Wales";s:8:"postCode";s:4:"2440";s:9:"livesWith";s:3:"Mom";s:8:"religion";s:12:"Presbyterian";s:8:"prekindy";a:2:{s:5:"week1";a:5:{s:6:"monday";s:4:"true";s:7:"tuesday";s:4:"true";s:9:"wednesday";s:4:"true";s:8:"thursday";s:4:"true";s:6:"friday";s:4:"true";}s:5:"week2";a:5:{s:6:"monday";s:4:"true";s:7:"tuesday";s:4:"true";s:9:"wednesday";s:4:"true";s:8:"thursday";s:4:"true";s:6:"friday";s:4:"true";}}}s:9:"Education";a:5:{s:15:"hasBeenExpelled";s:5:"false";s:16:"hasBeenSuspended";s:5:"false";s:14:"hasBeenRefused";s:5:"false";s:7:"details";s:6:"... :D";s:14:"previousSchool";s:26:"East Kempsey Public School";}s:9:"Behaviour";a:5:{s:19:"hasDisciplineIssues";s:5:"false";s:15:"hasBeenArrested";s:5:"false";s:20:"usedAlcoholOrTobacco";s:5:"false";s:16:"usedIllegalDrugs";s:5:"false";s:7:"explain";s:0:"";}s:7:"Medical";a:3:{s:16:"DoctorHealthFund";a:4:{s:7:"private";a:3:{s:9:"ambulance";s:5:"false";s:10:"healthFund";s:5:"false";s:18:"companyAndMemberId";s:0:"";}s:14:"medicareNumber";s:11:"24186893351";s:18:"medicareExpiryDate";s:7:"09/2017";s:22:"medicarePositionOnCard";s:1:"1";}s:18:"MedicalInformation";a:4:{s:10:"doctorName";s:5:"Ruben";s:11:"doctorPhone";s:1:"#";s:11:"isImmunised";s:4:"true";s:5:"wears";a:2:{s:7:"glasses";s:4:"true";s:8:"contacts";s:4:"true";}}s:17:"MedicalConditions";a:2:{s:3:"has";a:7:{s:6:"asthma";s:4:"true";s:4:"adhd";s:4:"true";s:8:"diabetes";s:4:"true";s:9:"epilepsey";s:5:"false";s:6:"autism";s:5:"false";s:9:"allergies";s:4:"true";s:7:"explain";s:28:"Has Supporting Documentation";}s:17:"earlyIntervention";s:4:"true";}}s:9:"Emergency";a:2:{i:0;a:3:{s:4:"name";s:18:"Christian Aquilina";s:5:"phone";s:10:"0430525909";s:12:"relationship";s:5:"Uncle";}i:1;a:3:{s:4:"name";s:12:"Randal Jones";s:5:"phone";s:10:"0430525909";s:12:"relationship";s:6:"Mother";}}s:9:"HasFamily";b:0;s:8:"FamilyID";b:0;s:4:"Fees";a:1:{s:16:"enrolment-prices";a:13:{i:0;i:1725;i:1;i:1725;i:2;i:1725;i:3;i:1725;i:4;i:1725;i:5;i:1725;i:6;i:1725;i:7;i:2045;i:8;i:2045;i:9;i:2415;i:10;i:2415;i:11;i:2750;i:12;i:2750;}}}";}s:19:"RepeatTillCancelled";s:4:"true";s:25:"AutomaticPaymentIncreases";s:4:"true";s:23:"PaymentResponsibilities";a:4:{s:6:"mother";s:5:"false";s:6:"father";s:4:"true";s:8:"guardian";s:5:"false";s:5:"other";s:4:"true";}s:16:"OtherInformation";a:5:{s:4:"name";s:2:"AA";s:21:"relationshipToStudent";s:2:"BB";s:7:"address";s:2:"CC";s:5:"email";s:2:"DD";s:11:"phoneNumber";s:2:"EE";}s:9:"TermsLeft";N;s:13:"QuarterOfYear";N;s:20:"QuarterOfYearDecimal";N;s:10:"Familydd";N;s:10:"Familycc";N;s:10:"Familycl";N;s:12:"BuildingLevy";i:180;s:17:"TotalAnnualPrices";a:0:{}s:16:"TotalAnnualPrice";i:0;s:30:"TotalAnnualPriceAfterDiscounts";i:0;s:19:"TotalDiscountAmount";i:0;s:14:"DiscountTotals";a:4:{s:6:"family";a:0:{}s:8:"employee";a:0:{}s:11:"scholership";a:0:{}s:12:"promtpayment";a:0:{}}s:23:"DiscountNameConversions";a:4:{s:6:"family";s:15:"Family Discount";s:8:"employee";s:17:"Employee Discount";s:11:"scholership";s:20:"Scholership Discount";s:12:"promtpayment";s:22:"Promt Payment Discount";}s:15:"StudentTuitions";a:0:{}s:4:"Fees";a:12:{i:0;a:3:{s:7:"tuition";i:1025;s:10:"compulsory";i:700;s:7:"subject";i:0;}i:1;a:3:{s:7:"tuition";i:1025;s:10:"compulsory";i:700;s:7:"subject";i:0;}i:2;a:3:{s:7:"tuition";i:1025;s:10:"compulsory";i:700;s:7:"subject";i:0;}i:3;a:3:{s:7:"tuition";i:1025;s:10:"compulsory";i:700;s:7:"subject";i:0;}i:4;a:3:{s:7:"tuition";i:1025;s:10:"compulsory";i:700;s:7:"subject";i:0;}i:5;a:3:{s:7:"tuition";i:1025;s:10:"compulsory";i:700;s:7:"subject";i:0;}i:6;a:3:{s:7:"tuition";i:1025;s:10:"compulsory";i:700;s:7:"subject";i:0;}i:7;a:3:{s:7:"tuition";i:1025;s:10:"compulsory";i:715;s:7:"subject";i:305;}i:8;a:3:{s:7:"tuition";i:1025;s:10:"compulsory";i:715;s:7:"subject";i:305;}i:9;a:3:{s:7:"tuition";i:1225;s:10:"compulsory";i:715;s:7:"subject";i:475;}i:11;a:3:{s:7:"tuition";i:1330;s:10:"compulsory";i:740;s:7:"subject";i:680;}i:12;a:3:{s:7:"tuition";i:1330;s:10:"compulsory";i:740;s:7:"subject";i:680;}}s:6:"Totals";a:0:{}s:8:"Interval";s:8:"annually";s:16:"IntervalDiscount";d:0.10000000000000001;s:17:"IntervalConverter";a:3:{s:8:"annually";d:0.10000000000000001;s:6:"termly";d:0.050000000000000003;s:6:"weekly";d:0;}s:13:"PaymentMethod";s:10:"creditcard";s:12:"MetaStudents";a:0:{}}";}}}';
  $_SESSION = unserialize($str);
