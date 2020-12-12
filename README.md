

## Country Reports

Application to store country reports data.

Features:
- Client side validations (to validate empty fields)
	Testcase : Please leave all the fields blank and submit.
- Server side validations (to validate min and max length of the data)
	Testcase : Please enter less than 3 characters in some of the fields and submit.
- Synchronized Vertical Scroll for sections

Example Json format stored in CountryReport Table :

{
    "country_id": "Ctr1",
    "country_name": "India",
    "country_language": "Hindi",
    "chapters": {
        "1": {
            "id": "Cpt1",
            "title": "Cpt1 title",
            "data": "Cpt1 data",
            "sections": {
                "1": {
                    "id": "Sec1",
                    "title": "Sec1 title",
                    "data": "Sec1 data"
                },
                "2": {
                    "id": "Sec2",
                    "title": "Sec2 title",
                    "data": "Sec2 data"
                }
            }
        },
        "2": {
            "id": "Cpt2",
            "title": "Cpt2 title",
            "data": "Cpt2 data",
            "sections": {
                "1": {
                    "id": "Sec1",
                    "title": "Sec1 title",
                    "data": "Sec1 data"
                },
                "2": {
                    "id": "Sec2",
                    "title": "Sec2 title",
                    "data": "Sec2 data"
                },
                "3": {
                    "id": "Sec3",
                    "title": "Sec3 title",
                    "data": "Sec3 data"
                }
            }
        }
    }
}


