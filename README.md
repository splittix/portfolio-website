# Setup

To run php, I followed these instructions:
https://github.com/zeit/now-examples/tree/master/php-7


# setting up an html and php site

https://zeit.co/blog/now-2


# To add an email server:
# Managing DNS records: https://zeit.co/docs/v2/domains-and-aliases/dns/

`now dns add lisaseacat.com @ MX mx.yandex.net 10`

https://passport.yandex.com/registration?retpath=https%3A%2F%2Fconnect.yandex.com%2F%3Fjoin%3Dopen&process_uuid=2c5b46d0-962a-4e84-b1c7-380f5e323fc0

now dns add lisaseacat.com @ MX mx1.forwardemail.net 10
now dns add lisaseacat.com @ MX mx2.forwardemail.net 20

# Setup TXT records
now dns add lisaseacat.com @ TXT "forward-email=cpup22@gmail.com"
now dns add lisaseacat.com @ SPF "v=spf1 a mx include:spf.forwardemail.net -all"

#If no SPF supported, use:
now dns add lisaseacat.com @ TXT "v=spf1 a mx include:spf.forwardemail.net -all"

# Read documentation on MX records:
https://forwardemail.net/#/