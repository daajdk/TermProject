create procedure changeCustomerName(custID int, newfname varchar(25), newlname varchar(25))
       BEGIN
	UPDATE customer
	SET fname = newfname, lname = newlname
	WHERE customerID = custID
       END;
create procedure changeCustomerCity(custID int, newcity varchar (50))
       BEGIN
	UPDATE customer
	SET customercity = newcity
	WHERE customerID = custID
       END;
create procedure changeCustomerPhone(custID int, newphone varchar (10))
       BEGIN
        UPDATE customer
        SET phone = newphone
        WHERE customerID = custID
       END;

create procedure changeSupplierName(suppID int, newname varchar (25))
       BEGIN
        UPDATE supplier
        SET sname = newname
        WHERE supplierID = suppID
       END;
create procedure changeSupplierCity(suppID int, newcity varchar (50))
       BEGIN
        UPDATE supplier
       	SET suppliercity = newcity
       	WHERE supplierID = suppID
       END;
create procedure changeSupplierPhone(suppID int, newphone varchar (10))
       BEGIN
	UPDATE supplier
       	SET supplierphone = newphone
       	WHERE supplierID = suppID
       END;

create procedure changeProductName(sku char(13), newname varchar(25))
       BEGIN
	UPDATE product
       	SET upc = sku
       	WHERE upc = sku
       END;
create procedure changeProductCategory(sku char(13), newcat varchar(25))
       BEGIN
	UPDATE product
	SET category = newcat
	WHERE upc = sku
       END;
create procedure changeProductType(sku char(13), newtype varchar(25))
       BEGIN
        UPDATE product
        SET ptype = newtype
        WHERE upc = sku
       END;

create procedure changeProductPrice(suppID char(10), sku char(13), newprice decimal(5,2))
       BEGIN
	UPDATE sells
	SET price = newprice
	WHERE sells.supplierID = suppID and sells.upc = sku
       END;
create procedure changeProductShippingCost(suppID char(10), sku char(13), newprice deicmal(5,2))
       BEGIN
	UPDATE sells
	SET shipcost = newprice
	WHERE sells.supplierID = suppID and sells.upc = sku
       END;

create procedure showInventory(suppID char(10))
       BEGIN
	SELECT supplierID, sname, pname, ptype, category, inventory, price 
	FROM (sells join product using(upc)) join supplier using (supplierID)
	WHERE supplierID = suppID
       END;		 
