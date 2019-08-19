# cmreport

spa reporting template for Cinq Mondes

IO device to monitor Spa revenue and calculate KPI

Languages: SQL (MySQL), PHP, JS, CSS, HTML

UI: 
login form > 
  > access to page with input forms for a given month > validation > upload to SQL database
  > access to recorded data of previous months > display & .csv export based on a template (tbd)
Other fucntionalities:
  > automatic email with csv report when submit, sent to admin
  > error handling:
    > missing data: automatic fill 0 on given inputs; and force input on other else no sending possible
  > record patial data if user can't input everything at once, and continue later  
***********************
INPUTS & OUTPUTS DETAIL
***********************
1. INPUTS:
  1.0 month and year
  1.1 number of treatment rooms
  1.2 revenue breakdown
    1.2.1 treatments breakdown
    1.2.2 retail breakdown 

  1.3 opening hours

  1.4 total hours of available therapists

  1.5 hotel spa specific data
    1.5.1 number of hotel rooms
    1.5.2 average number of guests per hotel room
    1.5.3 hotel occupancy
    1.5.4 number of hotel guests invoiced in the spa

  1.6 breakdown of treatments performed
    1.6.1 hours per category
    1.6.2 quantity per category

  1.7 clients data
    1.7.1 number of clients invoiced
    1.7.2 number of new clients
    1.7.3 number of clients with retail purchase

2. OUTPUTS:
  2.1 total number of treatment rooms
    > based on following convention:
      . single room = 1
      . double room = 1.25
      . bath = 1
      . palapa = 1
      . scrub table = 1
      . hammam = 0
      
  2.2 revenue subtotals
    2.2.1 Gift certificates subtotal
    2.2.2 Other treatments services subtotal
    2.2.3 treatments subtotal = Gift Certificates subtotal + other treatments services subtotal
    2.2.4 retail subtotal per category
      2.2.4.1 retail subtotal face line
      2.2.4.2 retail subtotal body line
      2.2.4.3 retail subtotal other products
    2.2.5 total revenue = treatments subtotals + retail subtotals

  2.3 treatments performed
    2.3.1 subtotals qty
      2.3.1.1 subtotal qty face treatments
      2.3.1.2 subtotal qty body treatments
      2.3.1.3 subtotal qty other treatments  
    2.3.2 subtotals hours
      2.3.2.1 subtotal hours face treatments
      2.3.2.2 subtotal hours body treatments
      2.3.2.3 subtotal hours other treatments
    2.3.3 proportions to total treatments performed
      2.3.3.1 proportions of each category to total hours
      2.3.3.2 proportions of each category to total quantity

  2.4 hotel spa specific data analysis
    2.4.1 conversion rate based on the following formula:
          (number of guests invoiced in the spa / number of hotel guests) = n %
          number of hotel guests is obtained with the following computation:
          (nbr of hotel rooms available * occupancy rate of hotel * avg nbr of guests per room * nbr of days in the month) = n

  2.5 retail to service ratios
    2.5.1 retail to service ratio in revenue
      > (subtotal retail revenue / subtotal treatments revenue) = n %
    2.5.2 retail to service ratios in quantity
      2.5.2.1 retail to service face line
        (retail face line qty / face treatments qty) = n %
      2.5.2.2 retail to service body line
        (retail body line qty / body treatments qty) = n %
        with body treatments subtotal qty = massages + body scrubs + slimming + bath + hammam
   
  2.6 retail revenue to total revenue = n %

  2.7 occupancy
    2.7.1 spa treatment rooms occupancy
      > (total hours treatments performed / (nbr of opening hours * nbr of treatment rooms)) = n %
    2.7.2 therapists occupancy
      > (total hours of treatments performed / nbr of hours of available therapists) = n %
      
  2.8 other KPI
    2.8.1 average ticket
      > (total revenue / number of clients invoiced) = n €
    2.8.1 average retail revenue per client
      > (subtotal retail revenue / number of guests with retail purchase) = n €
      
***********************************************************************************************************************************      
