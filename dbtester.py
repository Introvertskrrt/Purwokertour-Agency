import mysql.connector

def fetch_wisata_data():
    try:
        connection = mysql.connector.connect(
            host="db4free.net",  # Replace with your cPanel MySQL host
            user="introvertskrrt",
            password="1Ntrovert2901!",
            database="purwokertour",
            port=3306
        )

        if connection.is_connected():
            print("CONNECTED\n")
            cursor = connection.cursor(dictionary=True)

            # SQL query to select all data from 'daftar_wisata'
            query = "SELECT * FROM daftar_wisata"

            cursor.execute(query)
            result = cursor.fetchall()

            for row in result:
                print(row)

        else:
            print("Unable to connect to the database.")

    except Exception as e:
        print(f"Error: {e}")

    finally:
        # Close the connection if it was opened
        if 'connection' in locals() and connection.is_connected():
            cursor.close()
            connection.close()
            print("Connection closed.")

if __name__ == "__main__":
    fetch_wisata_data()
