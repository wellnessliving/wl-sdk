# Question
I have an event with purchase rule "Clients can pay online or pay when they visit".  
I POST anny model in module `Wl\Book\Process` to book event without payment.  
I get error "You can not book this class without payment".  
How can I book an event without payment?
# Answer
You have to set `is_force_pay_later` field of your model to `true`.