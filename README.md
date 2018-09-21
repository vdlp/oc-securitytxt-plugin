# Vdlp.SecurityTxt

“When security risks in web services are discovered by independent security researchers who understand the severity of 
the risk, they often lack the channels to disclose them properly. As a result, security issues may be left unreported. 
`security.txt` defines a standard to help organizations define the process for security researchers to disclose security 
vulnerabilities securely.”

https://securitytxt.org/

Adds the following routes to your October CMS website:

```
/security.txt
/.well-known/security.txt
```

## Configuration

Go to the Settings section and provide the required information. 

## Requirements

PHP ^7.0

## Installation

`composer require vdlp/securitytxt`
