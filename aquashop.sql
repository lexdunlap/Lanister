/* Create the aqua_shop database */
DROP DATABASE IF EXISTS aquashop;
CREATE DATABASE aquashop;
USE aquashop;

/* Create database tables */
CREATE TABLE customers (
  customerID        INT            NOT NULL   AUTO_INCREMENT,
  emailAddress      VARCHAR(20)    NOT NULL,
  password          VARCHAR(20)    NOT NULL,
  firstName         VARCHAR(20)    NOT NULL,
  lastName          VARCHAR(20)    NOT NULL,
  shipAddressID     INT                       DEFAULT NULL,
  billingAddressID  INT                       DEFAULT NULL,  
  PRIMARY KEY (customerID),
  UNIQUE INDEX emailAddress (emailAddress)
);

CREATE TABLE addresses (
  addressID         INT            NOT NULL   AUTO_INCREMENT,
  customerID        INT            NOT NULL,
  line1             VARCHAR(20)    NOT NULL,
  line2             VARCHAR(20)               DEFAULT NULL,
  city              VARCHAR(20)    NOT NULL,
  state             VARCHAR(2)     NOT NULL,
  zipCode           VARCHAR(10)    NOT NULL,
  phone             VARCHAR(12)    NOT NULL,
  disabled          TINYINT(1)     NOT NULL   DEFAULT 0,
  PRIMARY KEY (addressID),
  INDEX customerID (customerID)
);

CREATE TABLE orders (
  orderID           INT		       NOT NULL   AUTO_INCREMENT,
  customerID        INT            NOT NULL,
  orderDate         DATETIME       NOT NULL,
  shipAmount        DECIMAL(10,2)  NOT NULL,
  taxAmount         DECIMAL(10,2)  NOT NULL,
  shipDate          DATETIME                  DEFAULT NULL,
  shipAddressID     INT            NOT NULL,
  cardType          INT            NOT NULL,
  cardNumber        CHAR(16)       NOT NULL,
  cardExpires       CHAR(7)        NOT NULL,
  billingAddressID  INT            NOT NULL,
  PRIMARY KEY (orderID), 
  INDEX customerID (customerID)
);

CREATE TABLE orderItems (
  itemID            INT            NOT NULL   AUTO_INCREMENT,
  orderID           INT            NOT NULL,
  productID         INT            NOT NULL,
  itemPrice         DECIMAL(10,2)  NOT NULL,
  quantity          INT 		   NOT NULL,
  PRIMARY KEY (itemID), 
  INDEX orderID (orderID), 
  INDEX productID (productID)
);

CREATE TABLE products (
  productID         INT		       NOT NULL   AUTO_INCREMENT,
  categoryID        INT            NOT NULL,
  productCode       VARCHAR(10)    NOT NULL,
  productName       VARCHAR(40)    NOT NULL,
  description       TEXT           NOT NULL,
  listPrice         DECIMAL(10,2)  NOT NULL,
  quantity			INT			   NOT NULL,
  PRIMARY KEY (productID), 
  INDEX categoryID (categoryID), 
  UNIQUE INDEX productCode (productCode)
);

CREATE TABLE categories (
  categoryID        INT            NOT NULL   AUTO_INCREMENT,
  categoryName      VARCHAR(20)    NOT NULL,
  PRIMARY KEY (categoryID)
);

CREATE TABLE administrators (
  adminID           INT            NOT NULL   AUTO_INCREMENT,
  emailAddress      VARCHAR(20)    NOT NULL,
  password          VARCHAR(20)    NOT NULL,
  firstName         VARCHAR(20)    NOT NULL,
  lastName          VARCHAR(20)    NOT NULL,
  PRIMARY KEY (adminID)
);

/* Insert data into tables */
INSERT INTO categories (categoryID, categoryName) VALUES
(1, 'Water Toys & Dive Gear'),
(2, 'Wakeskates & Wakesurfers'),
(3, 'Towables');

INSERT INTO products (productID, categoryID, productCode, productName, description, listPrice, quantity) VALUES
(1, 1, 'kite', 'Prodigy Kite', 'Our lightest Prodigy ever!\r\n\r\nBuilt around a robust 3 strut design, our most popular & best selling kite comes by its success honestly. Featuring a massive wind range and incredible flight stability the Prodigy is an ideal choice for kiters looking for the perfect freeride to also take in the waves. With superb power delivery and a generous, forgiving feel the Prodigy delivers smooth turns and effortless big airs and hang time while sitting perfectly in the window and drifting with you when you’re powered up and on a wave.\r\n\r\nFeatures:\r\n\r\n* bullet pt\r\n* bullet pt\r\n* bullet pt', '925.00', '10'),
(2, 1, 'kiteboard', 'Tronic Kiteboard', 'The 2017 Tronic is a choppy water machine. The Tronics parabolic rails make this board great for the chop and creates a feeling of surfing a twin tip with its carving ability. The Cabrinha Tronics quad concave and moderate rocker makes this board great for boosting big airs. The Tronic will handle all your choppy condition needs and hold down the power to jump higher than you ever have before.\r\n\r\n', '589.00', '10'),
(3, 1, 'dolphin', 'SeaScooter Dolphin', 'Ideal for water lovers, the revolutionary Sea Scooter Dolphin is the lightest and most efficient personal propeller in the world with a price that makes it hard to resist. The Sea Scooter Dolphin can run at a speed of 2mph at a depth down to 15feet. Compact and lightweight at just 12 lbs., the SeaScooter Dolphin offers positive buoyancy and dual trigger operation. Easily recharged overnight with the supplied charger. Features auto shut off, a finger-activated soft start trigger, and quick release latches for easy removal of battery for recharging. Run time of up to 1.5 hours.', '220.00', '10'),
(4, 1, 'snorkel', 'Snorkel Set', 'With a mask sized just for the ladies, this travel snorkel set includes everything needed for those beach vacations. Mask features silicone skirt to seal out water, Pro-Glide buckle for easy adjustment, and tempered glass lens. Snorkel includes ergonomic, silicone mouthpiece, purge, and Pivot Dry submersible dry top that closes when the snorkel is submerged. Open-heel adjustable fins are perfect for any female traveler. Nylon travel carry bag keeps all your snorkel gear together. Sizes: S(5-8), M(8-11).', '65.00', '10'),
(5, 1, 'rockit', 'Aquaglide Rockit', 'Endless fun!\r\n\r\nThis circular water-rocker can handle up to eight people or can be used by as few as two. Work together (or not) to balance and tip the Rockit for hours of water fun. Designed with lots of stations from which to roll it and "rockit"! 14ft L x 14ft W x 5.5ft H. 3-year warranty.', '2,500.00', '10'),
(6, 1, 'flyboard', 'FlyBoard', 'Here it is: The FlyBoard.\r\n\r\nThis ingenious and deceptively simple device bolts on to the personal water craft (PWC) routing the water jet through a long hose that connects to a pair of jet boots and hand-held stabilizers. The arrangement lets you fly, Iron Man style, up to 30 feet in the air – or leap headfirst through the waves like a human dolphin.', '5,520.00', '10'),
(7, 1, 'hoverboard', 'Hoverboard', 'Once you have mastered FlyBoarding® take it to the next step and try HoverBoarding. If you like to snowboard, skateboard or just fly to the sky, Hoverboarding is a new exciting extreme sport. Complete kit with everything you will need to fly this amazing new creation.', '5,850.00', '10'),
(8, 1, 'bag', 'Blob Jump Bag', 'Inflatable water launch jump blob. This product has a unique shape, refined material selection, easy to install, can inflate in less than one minute. Perfect for water parks, lakes, or alongside a pool, a beach or a river. Cool off and have endless fun on hot summer days. 36 ft L x 9 ft W', '580.00', '10'),
(9, 1, 'park', 'Aquapark Trampoline', ' This trampoline is designed for superior bouncing performance and years of trouble-free service. Since trampoline performance is about focusing a jumper’s energy, a rigid, powerful frame is the only option for serious bouncing. Built tough to withstand the demands of commercial use, it is assembled using hot-air welded 31 oz. fabric-reinforced PVC tubes, double-dip galvanized steel frames and powder-coated springs. Aquapark includes Blast and Slide Attachments, SwimStep access platform and anchor bridle.', '4,700.00', '10'),
(10, 1, 'slide', 'Pontoon Slide', 'Turn your pontoon boat into a water playground with the Freefall slide from Aquaglide. The slide is manufactured from a UV-coated, commercial-grade reinforced PVC material for years of trouble-free service, while stainless anchor rings remain stable and secure. Molded handles and welded footsteps on the ladder offer convenient, worry-free climbing. Slide includes replaceable heavy-duty anchor straps, sized to fit most pontoon boats. Comes with a FREE 12V Turbo Pump for quick inflation/deflation. 200-lb. weight capacity. 120"L x 35"W x 42"H.', '400.00', '10'),
(11, 1, 'jim', 'Jungle Jim', 'Walk on the wild side! Jungle Jim is an outrageous multi-use playstation designed for those who find other options just a bit too tame. This 6ft. 9 in. tall pyramid is built for climbing, sliding, jumping, splashing, and a whole lot more. Outside climbing walls angle inward for easy access and stability, while the corner posts serve as exciting drop zones for sliding. Multiple tiers let you leap from the level of your choice. Once inside, you can climb up through the top on the interior climbing wall. Mesh floors create two separate splash zones for water wars or simply for lounging. Connect Platinum accessories such as the Blast II Air Bag at up to four stations using the Interloc System. Suitable for up to six people. 9 ft. 6 in. L x 8 ft. 8 in. W x 6 ft. 9 in. H. 117 lbs. Three-year warranty.', '1,900.00', '10'),
(12, 1, 'mat', 'Splashmat', 'The Splashmat inflatable water float is flexible, fun, and downright wiggly. Ideal for use as a launching pad or water play platform, the Splashmat is fantastic for up to 8 people. Fabric-reinforced PVC with high-tech inflatable drop-stitched material is extremely durable, yet ultra-compact. This 18 ft. long mat rolls up to the size of a backpack and fits in a convenient transport bag. Only 2 in. thick when fully inflated, the Splashmats low profile allows easy boarding and maximum splash factor. The smooth surface will not irritate sensitive skin while at play. Use Splashmat alone or connect it to other Aquaglide Platinum items with the Interloc System', '900.00', '10'),
(13, 1, 'swing', 'Aquapark Ropeswing', 'The free-standing rope swing is an incredibly fun addition to your lake. Both kids and adults will have a blast swinging to and fro before splashing into the water underneath. Commercial-grade PVC construction features 10-gauge galvanized steel frame. 3 optional anchor points. Sets up in only 25 - 40 minutes. Can also be connected to the Classic Aqua Jump models. 180 in. x 171 in. x 161 in.', '3,600.00', '10'),
(14, 1, 'sport', 'Multisport', 'A totally unique way to get out on the water! This compact inflatable boat sets up in a matter minutes and comfortably fits up to 3 people. Ideal for beginning sailors or anyone looking to enjoy the freedom of being on the water. Completely redesigned, the Multisport 270 sails better than ever! Improvements include heavily reinforced fittings, durable molded parts, and stainless steel hardware for better rigging. The Multisport 270 is an incredibly versatile craft that converts easily from sailboat to windsurfer, and even makes a great towable for up to two riders. Includes Kayak Kit so that the Multisport 270 can be used as a stable kayak or small tender. Also includes a convenient heavy-duty storage/transport bag that easily fits in a car trunk or boat locker. Designed for travel, this bag features sturdy luggage wheels for easy transport. When packed away in the bag, the Multisport 270 weighs about 60 lbs. and can be checked as airline luggage. Comes with everything needed to sail, windsurf, tow, and travel, plus a convenient foot pump for easy inflation. The Multisport 270 measures 102 in. L x 59 in. W x 10 in. H.', '900.00', '10'),
(15, 1, 'dock', 'Floating Dock', 'Super rigid, high-pressure, drop-stitch construction lets this floating dock comfortably support standing adults. Unique floating dock provides extra play space and easily holds beach chairs for summertime lounging. Functional as a work platform, the floating dock makes cleaning, repairs, and detailing a breeze. Can also be used as a landing/launching pad for varied watercraft. Design includes 6 stainless steel D-ring tie-downs and 6 super strong reinforced grab handles for easy boarding. H3 high-pressure valve allows quick inflation and deflation. Inflates with any high volume pump or shop vac. 1,650-lb. weight capacity. 10 ft x 10 ft x 6 in.', '1,900.00', '10'),
(16, 1, 'volley', 'Supervolley Trampoline', 'Nothing packs a punch like Aquaglides new and improved powerful Supervolley 30! Designed for multiple bouncers and volleyball play on the water, this trampoline is a floating court with a serious sporting attitude. Imagine playing volleyball - with bounce! The regulation volleyball is tethered with 4mm bungee, so the pace is fast and fun and is perfect for users who are up for some friendly competition on the water. There are also 2 convenient PVC pockets for storing all of your sporting gear. Floating volleyball court holds up to 6 users. 30 ft. L x 15.5 ft. W x 3 ft. H.', '7,000.00', '10'),
(17, 2, 'tsunami', 'Tsunami Wakesurfer ', 'Easy starts, low boat speeds, the feel of freedom, and a fast learning curve make wakesurfing a fast growing, fun sport. The Tsunami is made for intermediate to advanced riders. Its high performance design is skim inspired. Three interchangeable fiberglass fins on the tail combine with a small tip fin to help spin 3s. A molded kick tail and arch support help with board control. An EVA tip protector not only protects your board, but also your boat. EVA pad on top. Compression molded. Length: 57 in.', '400.00', '10'),
(18, 2, 'shim', 'Shim Wakesurfer', 'This hybrid design of this board combines the two most popular styles of wakesurfer, the skim and the traditional surf style. The Hyperlite Shim wakesurfer is perfect for intermediate to advanced riders looking to take their skills to the next level. The Shim has a fast rocker, allowing it to carry speed anywhere on the curl, and its shorter profile makes it super maneuverable for rotational and air tricks. Shim wakesurfer features dura-shell technology which combines the buoyancy and feel of a high-end EPS board with the durability of a compression-molded shape.', '550.00', '10'),
(19, 2, 'paragon', 'Paragon Wakeskate', 'The Paragon series of Hyperlite wakeskates features a dual density EVA top with true skate concaves. It utilizes a redesigned edge bevel to provide a more effective edge into the wake. The Paragon is finished off with a fully sealed 9-ply bottom deck for all the feel and pop of wood.', '180.00', '10'),
(20, 2, 'ocean', 'Ocean Wakeskate', 'The Mr. Ocean wakeskate boasts full-ply wood construction with the addition of an ABS sidewall and Enduro base. Exclusive construction uses an epoxy resin laminate, making the Mr. Ocean wakeskate stronger and longer lasting than other wood skates on the market. Rail and kick-tail concaves were added to the deck for a great feel under foot. The finishing touch is a fast continuous rockerline that helps to generate speed into the wake and reduces drag.', '350.00', '10'),
(21, 3, 'one', '1 Rider Towable', 'The Bucket Seat is an exciting inflatable concept from World of Watersports. Designed with an ergonomic shape, this item can be used as a tow tube behind the boat as well as a relaxing lounge in your favorite body of water. Riders can sit in the Bucket Seat like a chair for an easy ride, or they can kneel on the backrest for a more challenging one. Once the ride is over, sit back and relax in one of the most comfortable lounges you will find for the water. Features durable nylon cover, heavy-duty PVC bladder, and double webbing foam handles. 54 in. x 44 in.', '200.00', '10'),
(22, 3, 'two', '2 Rider Towable', 'The Lugz towable tube from World of Watersports features a curved aerodynamic shape that gives the riders the option of steering. It comes with 3 tow points and allows you to sit, kneel, stand, or lie down for riding fun. By shifting your weight from left to right, you can take control of where you want to go. The Lugz has a U-shaped body design that slips over the boat wake easily for fast action and a thrilling ride not found on most other towables. Manufactured for durability with tuff shell nylon cover, PVC bladder, 12 double webbing foam handles with knuckle guards, EVA foam pad, zippered valve covers, and speed valve for fast inflation/deflation. 74 in. x 66 in.', '370.00', '10'),
(23, 3, 'three', '3 Rider Towable', 'Up to three riders can relax and lounge on this towable, or they can go for a wild ride across the water. 30-gauge PVC construction is fully covered with 840-denier nylon. Six handles with EVA knuckle guards let riders hold on tightly. The Relax towable also features 3 EVA pads, 1 quick-disconnect hook, and 2 Boston valves. 560-lb. weight limit. 93 in. x 63 in.', '300.00', '10'),
(24, 3, 'four', '4 Rider Towable', 'The exciting Great Big Brawler X with two hookup points can be pulled from the front or the rear. Go for a wild ride facing forward, and enjoy the tall air-cushioned backrest and side-walls, or ride in the opposite direction for a chariot-style blast! The Great Big Brawler X features an extra heavy-duty, commercial-grade, full nylon cover, durable RF-welded K80 40-ga. PVC bladder, tubular webbing foam-filled handles with EVA knuckle guards, comfortable EVA foam seat and knee pads, a quick-connect tow system, and 2 reinforced tow harnesses. The Great Big Brawler X also features the Lightning Valve which is similar to the Boston Valve except that it is attached to the towable, so there are no parts to keep up with or lose. The wider opening inflates and deflates 57% faster than the Boston Valve. An interior flap prevents air from escaping, even if the cap is not in place. Inside diameter of the valve measures 30mm. 680-lb. weight capacity. 85 in. L x 93 in.W (deflated). Two-year warranty.', '500.00', '10');

/*
INSERT INTO customers (customerID, emailAddress, password, firstName, lastName, shipAddressID, billingAddressID) VALUES

INSERT INTO addresses (addressID, customerID, line1, line2, city, state, zipCode, phone, disabled) VALUES

INSERT INTO orders (orderID, customerID, orderDate, shipAmount, taxAmount, shipDate, shipAddressID, cardType, cardNumber, cardExpires, billingAddressID) VALUES

INSERT INTO orderItems (itemID, orderID, productID, itemPrice, quantity) VALUES
*/

/* Create admin user named vern and grant privileges */
GRANT SELECT, INSERT, DELETE, UPDATE
ON aquashop.*  
TO vern@localhost
IDENTIFIED BY 'pa55word';
