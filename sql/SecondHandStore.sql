CREATE DATABASE IF NOT EXISTS SecondHandStore;

 

USE SecondHandStore;

 

CREATE TABLE `clothes` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `SubmissionDate` date DEFAULT NULL,
  `Sold` tinyint(1) DEFAULT 0,
  `SoldDate` date DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL,
  `Seller_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

 

INSERT INTO `clothes` (`ID`, `Name`, `SubmissionDate`, `Sold`, `SoldDate`, `Price`, `Seller_ID`) VALUES
(1, 'T-shirt', '2023-05-15', 1, '2023-05-20', 19.99, 1),
(2, 'Jeans', '2023-05-20', 1, '2023-06-07', 39.99, 1),
(3, 'Dress', '2023-05-10', 1, '2023-05-12', 49.99, 2),
(4, 'Långärmad tröja', '2023-06-07', 1, '2023-06-07', 199.99, 2),
(5, 'Stickad tröja', '2023-06-07', 1, '2023-06-07', 399.00, 2),
(6, 'Långärmad tröja', '2023-06-07', 1, '2023-06-08', 899.00, 3),
(7, 'Stickad tröja', '2023-06-08', 1, '2023-06-08', 399.00, 1),
(9, 'Mjukisbyxor', '2023-06-08', 0, NULL, 399.00, 5);

 

CREATE TABLE `sellers` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

 

INSERT INTO `sellers` (`ID`, `FirstName`, `LastName`) VALUES
(1, 'Mik', 'Doe'),
(2, 'Noor', 'Safir'),
(3, 'Ibra', 'Rahim'),
(4, 'Aya', 'abdil'),
(5, 'Naveed', 'safi');

 

ALTER TABLE `clothes`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Seller_ID` (`Seller_ID`);

 

ALTER TABLE `sellers`
  ADD PRIMARY KEY (`ID`);

 

ALTER TABLE `clothes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

 

ALTER TABLE `sellers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

 

ALTER TABLE `clothes`
  ADD CONSTRAINT `clothes_ibfk_1` FOREIGN KEY (`Seller_ID`) REFERENCES `sellers` (`ID`);