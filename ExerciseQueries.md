### Database schema:
- clients (id, name, age, address)
- hotels (id, name, construction_year)
- rooms (id, hotel_id, number, number_of_beds)
- rentals (id, client_id, room_id, number_of_days, price)

In the table rooms, hotel_id is a foreign key that references the hotels table.
In the table rentals, client_id is a foreign key that references the clients table.
In the table rentals, room_id is a foreign key that references the rooms table.

In the table clients, age is an integer, it is NOT year of birth.

Write the following queries:
1. List out every hotel built after the year 1997
2. List out every hotel where the hotel’s name starts with A.
3. For each hotel list out the name and number of rooms, but only if the number of rooms is greater than 10
4. Find clients who rented rooms in at least three hotels
5. Find names of clients who rented a room in the oldest hotel
6. Find hotels in which every room has two beds
7. Find hotels where the every client rented a room at least once
8. Find the hotel with the largest number of rooms
9. Find the hotel with the largest number of beds
10. Find the hotel which was rented only by clients older than 60
11. Find pairs of hotels with the same number of rooms
12. Find how much each hotel made from renting
13. Find a client who rented at least twice in each of the hotels
14. Insert a client named Bob, 32, Some Street
15. Update Bob’s address to Other Street
16. Delete Bob
