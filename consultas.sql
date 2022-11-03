
-- Consulta 1  
-- Realizar una consulta que permita conocer cuál es el producto que más stock tiene

SELECT  id, Nombre_Producto, Precio, MAX(Stock)as total from producto;

-- Consulta  2
-- producto  con mayor registro  de ventas
select id,Nombre_Producto, COUNT(Nombre_Producto), SUM(Cantidad* precio) as total   from producto
INNER join ventas
on producto.id = ventas.id_producto
GROUP by  Nombre_Producto
order by COUNT(Nombre_Producto) DESC