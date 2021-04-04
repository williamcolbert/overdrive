# vins
- year
- make
- model
- color
- stock #
- cling code


# services 
- Club Processing (new, old)
- Car Detail (new-pdi,old-uci)
- Trade In Processing
- Trade In Detail
- Demo Clean
- Rental Clean
- 2 Window Tint
- All Window Tint
- Sun Strip Tint
- Tint Removal
- RO
- PO


# employees / technicians
- id
- employee_number
- first_name
- last_name
- active
- dealership (multiple)
- ADP id
- hourly
- flat rate
- rate 
- third party vendor ? 
- salaried 


#
- clock in
- lunch out
- lunch in
- clock out


DB

## services
- id
- vin
- service_id
- service_name
- service_date
- service_amount
- repair_order_number
- purchase_order_number
- flat_rate_hours
- allow_duplicate
- invoiced_at
- created_at

## services_employees
- id
- service_id
- employee_id

## dealerships
- id
- number
- short_code
- qb_class
- parent_id


# Actions 
- Add Vin
- Update Vin
- Delete Vin
- Validate Vin
- Decode Vin Inforamtion 


- Add Service 
- Update Service Information (RO, PO)
- Delete Service
