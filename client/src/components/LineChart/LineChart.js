import { useRef, useEffect, useState } from 'react';
import { Line } from 'react-chartjs-2';
import { Chart as ChartJS } from 'chart.js/auto';
import systemApi from '../../api/systemApi';

function LineChart({ option }) {
    const userID = localStorage.userID;
    const [data, setData] = useState({
        datasets: [],
    });

    useEffect(() => {
        const getData = async () => {
            let response = null;
            try {
                response = await systemApi.getStaticalData(userID, option);
                setData({
                    labels: response.data.map((item) => item.day),
                    datasets: [
                        {
                            label: 'Số câu đúng',
                            data: response.data.map((item) => item.total),
                        },
                    ],
                });
                console.log(response);
            } catch (error) {
                console.log(error);
            }
        };
        getData();
    }, [option]);

    return (
        <Line
            data={data}
            options={{
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 100,
                    },
                },
            }}
        />
    );
}

export default LineChart;
